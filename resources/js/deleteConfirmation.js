
const deleteForms = document.querySelectorAll('.delete-form');
deleteForms.forEach(form => {
    form.addEventListener('submit', (event) => {
        event.preventDefault();
        const comicType = form.getAttribute('data-comic');
        const hasConfirmed = confirm(`Sei sicuro di voler eliminare il ${comicType}?`);
        if (hasConfirmed) form.submit();
    })
})

