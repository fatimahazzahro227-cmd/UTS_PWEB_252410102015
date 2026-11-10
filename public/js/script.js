const menuToggle = document.getElementById('menuToggle');
const mainNav = document.getElementById('mainNav');
const menuIcon = document.getElementById('menuIcon');

if (menuToggle && mainNav && menuIcon) {
    menuToggle.addEventListener('click', function () {
    mainNav.classList.toggle('menu-open');

    const isOpen = mainNav.classList.contains('menu-open');

    menuToggle.setAttribute('aria-expanded', isOpen);

    menuIcon.className = isOpen
    ? 'fas fa-times'
    : 'fas fa-bars';
    });
}

function openProductModal(button) {
const modal = document.getElementById('productModal');

if (!modal) return;

document.getElementById('modalName').textContent =
    button.dataset.name;

document.getElementById('modalImage').src =
    button.dataset.image;

document.getElementById('modalPrice').textContent =
    button.dataset.price;

document.getElementById('modalSpecification').textContent =
    button.dataset.specification;

document.getElementById('modalDimension').textContent =
    button.dataset.dimension;

document.getElementById('modalColors').textContent =
    button.dataset.colors;

modal.classList.remove('hidden');

document.body.style.overflow = 'hidden';
}

function closeProductModal() {
const modal = document.getElementById('productModal');

    if (!modal) return;

modal.classList.add('hidden');

document.body.style.overflow = 'auto';
}

const productModal = document.getElementById('productModal');

if (productModal) {
    productModal.addEventListener('click', function (event) {
    if (event.target === this) {
        closeProductModal();
        }
    });
}

document.addEventListener('keydown', function (event) {
    if (event.key === 'Escape' && productModal) {
        closeProductModal();
    }
});
