document.addEventListener("DOMContentLoaded", function() {
  let kelas = JSON.parse(localStorage.getItem("kelasList")) || [];
  document.getElementById("totalKelas").innerText = kelas.length;

  const search = document.getElementById("searchKelas");
  const list = document.getElementById("listKelas");

  search.addEventListener("input", function() {
    list.innerHTML = '';
    kelas.filter(k => k.toLowerCase().includes(search.value.toLowerCase()))
         .forEach(k => {
           const li = document.createElement("li");
           li.className = "list-group-item";
           li.innerText = k;
           list.appendChild(li);
         });
  });
});