document.addEventListener('DOMContentLoaded', function () {
    const sidebar = document.getElementById('adminSidebar');
    const toggleButton = document.getElementById('sidebarToggle');
    const overlay = document.getElementById('sidebarOverlay');

    if (!sidebar || !toggleButton) {
        return;
    }

    function openSidebar() {
        sidebar.classList.add('show');
        if (overlay) {
            overlay.classList.add('show');
        }
    }

    function closeSidebar() {
        sidebar.classList.remove('show');
        if (overlay) {
            overlay.classList.remove('show');
        }
    }

    toggleButton.addEventListener('click', function () {
        if (sidebar.classList.contains('show')) {
            closeSidebar();
            return;
        }

        openSidebar();
    });

    if (overlay) {
        overlay.addEventListener('click', closeSidebar);
    }

    window.addEventListener('resize', function () {
        if (window.innerWidth >= 992) {
            closeSidebar();
        }
    });
});
