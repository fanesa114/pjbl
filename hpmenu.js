function showDetail(id) { document.getElementById(id).classList.add('zoomed'); }
function closeDetail(id) { document.getElementById(id).classList.remove('zoomed'); }

let cur = 0;
const total = 3;
const slidesEl = document.getElementById('slides');
const dots = document.querySelectorAll('.dot');

function goSlide(n) {
    cur = (n + total) % total;
    if(slidesEl) slidesEl.style.transform = `translateX(-${cur * (100/3)}%)`;
    dots.forEach((d,i) => d.classList.toggle('active', i===cur));
}
function moveSlide(dir) { goSlide(cur + dir); }
setInterval(() => moveSlide(1), 4000);

let activeCategory = 'semua';

function filterMenu() {
    const q = document.getElementById('search-input').value.toLowerCase().trim();
    applyFilter(q, activeCategory);
}

function filterCategory(cat, btn) {
    activeCategory = cat;
    document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
    const q = document.getElementById('search-input').value.toLowerCase().trim();
    applyFilter(q, cat);
}

function applyFilter(q, cat) {
    const cards = document.querySelectorAll('.card');
    let visibleCount = 0;
    cards.forEach(card => {
        const name = card.dataset.name ? card.dataset.name.toLowerCase() : "";
        const cardCat = card.dataset.category ? card.dataset.category.toLowerCase() : "";
        const matchSearch = !q || name.includes(q);
        const matchCat = cat === 'semua' || cardCat === cat;
        
        if (matchSearch && matchCat) {
            card.classList.remove('hidden');
            visibleCount++;
        } else {
            card.classList.add('hidden');
        }
    });
    document.getElementById('no-result').style.display = visibleCount === 0 ? 'block' : 'none';
}