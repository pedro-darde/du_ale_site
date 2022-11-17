<template>
    <div class="container p-2 footer">
        <footer
            class="d-flex flex-wrap justify-content-end align-items-center py-3 my-4 border-top"
        >
            <ul class="nav col-md-4 justify-content-end">
                <li class="nav-item">
                    <a href="/" class="nav-link px-2 text-muted"
                        ><i class="fa fa-home m-2"></i>Home</a
                    >
                </li>
                <li class="nav-item">
                    <a
                        href="#"
                        class="nav-link px-2 text-muted"
                        @click="askAbout"
                        ><i class="fa fa-whatsapp m-2"></i>WhatsApp</a
                    >
                </li>
                <li class="nav-item">
                    <a :href="INSTAGRAM_URL" class="nav-link px-2 text-muted"
                        ><i class="fa fa-instagram m-2"></i>Instagram</a
                    >
                </li>
            </ul>
        </footer>
    </div>
</template>

<script src="./script.js"></script>
<style scoped lang="scss" src="./styles.scss"></style>
