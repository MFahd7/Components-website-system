const btns = document.querySelectorAll(".bton");
const storeProducts =document.querySelectorAll(".store-product");

for (i = 0; i<btns.length; i++){
    btns[i].addEventListener("click", (e) => {
        e.preventDefault();

        const filter = e.target.dataset.filter;
        storeProducts.forEach((product)=> {
            if(filter == "all"){
                product.style.display = "block"
            } else{
                if (product.classList.contains(filter)) {
                    product.style.display = "block"
                } else{
                    product.style.display = "none"
                }
            }
        })
    })
}