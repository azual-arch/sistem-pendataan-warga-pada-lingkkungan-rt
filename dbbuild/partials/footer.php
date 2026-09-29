</div></main></div>
<script>
document.querySelectorAll('[data-confirm]').forEach(el=>{
    el.addEventListener('click', e=>{
        if(!confirm(el.dataset.confirm)) e.preventDefault();
    });
});
const searchInputs=document.querySelectorAll('[data-table-search]');
searchInputs.forEach(input=>{
    input.addEventListener('input',()=>{
        const q=input.value.toLowerCase();
        const table=document.querySelector(input.dataset.tableSearch);
        if(!table) return;
        table.querySelectorAll('tbody tr').forEach(row=>{
            row.style.display=row.innerText.toLowerCase().includes(q)?'':'none';
        });
    });
});
</script>
</body></html>
