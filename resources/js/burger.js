class OverlayMenu {
    selectors = {
        root: '[data-js-overlay-menu]',
        dialog: '[data-js-overlay-menu-dialog]',
        burgerButton: '[data-js-overlay-menu-burger-button]'
    }

    stateClasses = {
        isActive: 'is-active',
        isLock: 'is-lock',
    }

    constructor() {
        this.rootElement = document.querySelector(this.selectors.root);
        if (!this.rootElement) return;

        this.dialogElement = this.rootElement.querySelector(this.selectors.dialog);
        this.burgerButtonElement = this.rootElement.querySelector(this.selectors.burgerButton);
        if (!this.dialogElement || !this.burgerButtonElement) return;

        this.isDialog = this.dialogElement.tagName === 'DIALOG';
        this.handleOutsideClick = this.handleOutsideClick.bind(this);

        this.bindEvents();
    }

    handleOutsideClick(event) {
        const isClickInside = this.dialogElement.contains(event.target) ||
                            this.burgerButtonElement.contains(event.target);

        if (!isClickInside && this.isOpen()) {
            this.closeMenu();
        }
    }

    isOpen() {
        return this.isDialog ?
            this.dialogElement.open :
            this.dialogElement.classList.contains(this.stateClasses.isActive);
    }

    toggleMenu() {
        this.burgerButtonElement.classList.toggle(this.stateClasses.isActive);
        document.documentElement.classList.toggle(this.stateClasses.isLock);

        if (this.isDialog) {
            this.dialogElement[this.dialogElement.open ? 'close' : 'show']();
        } else {
            this.dialogElement.classList.toggle(this.stateClasses.isActive);
        }

        // Добавляем/убираем обработчик клика вне меню
        if (this.isOpen()) {
            document.addEventListener('click', this.handleOutsideClick);
        } else {
            document.removeEventListener('click', this.handleOutsideClick);
        }
    }

    closeMenu() {
        this.burgerButtonElement.classList.remove(this.stateClasses.isActive);
        document.documentElement.classList.remove(this.stateClasses.isLock);

        if (this.isDialog) {
            this.dialogElement.close();
        } else {
            this.dialogElement.classList.remove(this.stateClasses.isActive);
        }

        document.removeEventListener('click', this.handleOutsideClick);
    }

    bindEvents() {
        this.burgerButtonElement.addEventListener('click', () => this.toggleMenu());
    }
}

document.addEventListener('DOMContentLoaded', () => new OverlayMenu());
