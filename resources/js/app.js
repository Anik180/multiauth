import './bootstrap';

// import Alpine from 'alpinejs';

// window.Alpine = Alpine;

// Alpine.start();

import Alpine from 'alpinejs/dist/module.cjs';

Alpine.data('demo', () => ({
    open: false,

    toggle() {
        this.open = !this.open
    }
}));

window.Alpine = Alpine;

// should be last
Alpine.start();
