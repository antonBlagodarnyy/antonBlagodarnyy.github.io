window.onload = () =>{
const btns = Array.from(document.getElementsByTagName("button"));
btns.forEach((item, index) => {
  item.addEventListener("click", () => {
    for (const item of btns) {
      item.classList.remove("active");
    }

    item.classList.add("active");
    document.getElementById("tab").setAttribute("data-tab", index);
  });
});

}
