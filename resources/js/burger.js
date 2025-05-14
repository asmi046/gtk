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

        this.overlayElement = document.createElement('div');
        this.overlayElement.className = 'overlay-menu__overlay';
        this.overlayElement.addEventListener('click', () => this.closeMenu());

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

        if (this.isDialog) {
            this.dialogElement[this.dialogElement.open ? 'close' : 'show']();
        } else {
            this.dialogElement.classList.toggle(this.stateClasses.isActive);
        }

        if (this.isOpen()) {
            // Добавляем оверлей в DOM и активируем его
            document.body.appendChild(this.overlayElement);
            // Чтобы анимация сработала, добавим класс с задержкой
            requestAnimationFrame(() => {
                this.overlayElement.classList.add('is-active');
            });

            document.addEventListener('click', this.handleOutsideClick);
        } else {
            // Убираем класс и удаляем оверлей после анимации
            this.overlayElement.classList.remove('is-active');
            this.overlayElement.addEventListener('transitionend', () => {
                if (!this.overlayElement.classList.contains('is-active') && this.overlayElement.parentNode) {
                    this.overlayElement.parentNode.removeChild(this.overlayElement);
                }
            }, { once: true });

            document.removeEventListener('click', this.handleOutsideClick);
        }
    }

    closeMenu() {
        this.burgerButtonElement.classList.remove(this.stateClasses.isActive);

        if (this.isDialog) {
            this.dialogElement.close();
        } else {
            this.dialogElement.classList.remove(this.stateClasses.isActive);
        }

        this.overlayElement.classList.remove('is-active');
        this.overlayElement.addEventListener('transitionend', () => {
            if (!this.overlayElement.classList.contains('is-active') && this.overlayElement.parentNode) {
                this.overlayElement.parentNode.removeChild(this.overlayElement);
            }
        }, { once: true });

        document.removeEventListener('click', this.handleOutsideClick);
    }

    bindEvents() {
        this.burgerButtonElement.addEventListener('click', () => this.toggleMenu());
    }
}

document.addEventListener('DOMContentLoaded', () => new OverlayMenu());
