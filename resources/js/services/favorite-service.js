class FavoriteService {
    #FAVORITE_KEY = "favorites";

    favorite(item) {
        if (this.exists(item.id)) {
            this.remove(item.id);
            return "fa fa-star-o p-2";
        }

        this.add(item);
        return "fa fa-star p-2";
    }

    get() {
        const itemStr = localStorage.getItem(this.#FAVORITE_KEY);
        return itemStr ? JSON.parse(itemStr) : [];
    }

    remove(itemId) {
        const newItems = this.get().filter((item) => item.id !== itemId) ?? [];
        localStorage.setItem(this.#FAVORITE_KEY, JSON.stringify(newItems));
    }

    add(item) {
        const newItems = [...this.get(), item];
        localStorage.setItem(this.#FAVORITE_KEY, JSON.stringify(newItems));
    }

    exists(itemId) {
        const items = this.get();
        return items.findIndex((item) => item && item.id === itemId) !== -1;
    }

    clear() {
        localStorage.removeItem(this.#FAVORITE_KEY);
    }
}

export const favoriteSerive = new FavoriteService();
