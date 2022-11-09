const rt_like =
{
    init() {
        this.likes = JSON.parse(window.localStorage.getItem('likes')) || [];

        this.cacheDOMElements();
        this.registerEventListeners();
        this.highlightBtns();
    },
    cacheDOMElements() {
        // Get all buttons
        this.btnLike = document.querySelectorAll('.like__button');
    },
    registerEventListeners() {
        // Get id of entries from every button
        this.btnLike.forEach((btn) => {
            btn.onclick = (e) => {
                const id = e.target.dataset.id;
                this.likeAction(id);
            }
        });
    },
    highlightBtns(){
        this.btnLike.forEach((btn) => {
            const uuid = btn.dataset.id;
            if(!this.likes.includes(uuid)) return;

            btn.classList.add('like__button--active');
        });
    },
    likeAction(entry_id) {
        // If not already in array, add it
        if(!this.likes.includes(entry_id)) {
            this.likes.push(entry_id);
        } else {
            this.likes.splice(this.likes.indexOf(entry_id), 1);
        }

        // Store in local storage
        window.localStorage.setItem('likes', JSON.stringify(this.likes));
    }
}

window.onload=(e) => {
    rt_like.init();
}
