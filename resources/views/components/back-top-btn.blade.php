<button class="back-top-btn" x-data="{
    backTop() {
        window.scrollTo(0, 0);
    },
    show: false,
    handleScroll() {
        if(window.scrollY >= 200) {
            this.show = true;
        } else {
            this.show = false;
        }
    }

}" @click="backTop()" @scroll.window.debounce="handleScroll()" x-show="show" x-cloak>
    <i class="fa-sharp fa-solid fa-chevron-up"></i>
</button>
