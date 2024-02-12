const text = document.querySelector('.text');
const seeText = document.querySelector('#seeText');
seeText.addEventListener("click", () => { text.textContent = "Demo for Document Object Model" });
const clearText = document.querySelector('#clearText');
clearText.addEventListener("click", () => { text.textContent = "" });


const parent = document.body.querySelector(".parent");
const addChild = document.body.querySelector("#add-child");
addChild.addEventListener("click", () => {
  if (parent.childNodes.length > 1) {
    return;
  }
  const child = document.createElement("div");
  child.classList.add("child");
  child.textContent = "child";
  parent.appendChild(child);
});

const removeChild = document.body.querySelector("#remove-child");
removeChild.addEventListener("click", () => {
  const child = document.body.querySelector(".child");
  parent.removeChild(child);
});
