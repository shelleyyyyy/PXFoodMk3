<?php

function viewGrill(){
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Grill</title>
        <style>
            
.page-title, .header{
    padding: 1em 0 0 0;
    text-align: center;
    margin: 0 auto 0 auto;
    font-size: 3em;
    font-family: sans-serif;
    font-weight: 700;
    letter-spacing: .5em;
    text-transform: uppercase;
}

.header{
    background-image: url("https://i.pinimg.com/originals/4e/ce/50/4ece5078ac690f2ac19456899830a236.jpg");
    padding: 5em;
    color: white;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
}

.menue-container{
    display: grid;
    grid-template-columns: auto;
    grid-gap: 3em;
    margin: 4em auto 4em auto;
}

.menue-item{
    display: grid;
    grid-template-columns: 8em 8em 10em 3em auto;
    /*border: 1px solid black;*/
    margin: auto auto auto auto;
    width: 50em;
}

.menue-item > div{
    /*border: 1px solid black;*/
    height: 5em;
}

.add{
    margin: 1.5em auto auto .9em;
}

.item-name{
    padding-top: 1.5em;
    text-align: center;
}

.pic{
    background-position: center;
    background-size: cover;
}

.des{
    text-align: center;
    padding-top: 1em;
}

.price{
    text-align: center;
    padding-top: 1.5em;
}

.cart{
    display: grid;
    grid-template-columns: auto;
    margin: 3em auto 5em auto;
    justify-content: center;
    background-color: lightgray;
    padding: 3em 3em 4em 3em;
}

.cart-header{
    display: grid;
    grid-template-columns: 15em 15em 15em;
}

.cart-header > div, .item > div{
    text-align: center;
    /*border: 1px solid black;*/
    padding-top: 1em;
}

.cart-items{
    display: grid;
    grid-template-columns: auto;

}

.item{
    display: grid;
    grid-template-columns: 15em 15em 15em 10em;
}

.bottom-line{
    margin: 5em auto auto auto;
    display: grid;
    grid-template-columns: 15em 15em 15em;

}

.bottom-line > div{
    justify-content: center;
    text-align: center;
}

.entered-quantity{
    width: 3em;
}

/*
PICTURES
*/

#pic-1{
    background-image: url("https://toppng.com/uploads/preview/burger-vector-png-image-black-and-white-download-burger-11562863804fhwuffqm2f.png");
}

#pic-2{
    background-image: url("https://toppng.com/uploads/preview/burger-vector-png-image-black-and-white-download-burger-11562863804fhwuffqm2f.png");
}

#pic-3{
    background-image: url("https://toppng.com/uploads/preview/burger-vector-png-image-black-and-white-download-burger-11562863804fhwuffqm2f.png");
}

#pic-4{
    background-image: url("https://toppng.com/uploads/preview/burger-vector-png-image-black-and-white-download-burger-11562863804fhwuffqm2f.png");
}

#pic-5{
    background-image: url("https://toppng.com/uploads/preview/burger-vector-png-image-black-and-white-download-burger-11562863804fhwuffqm2f.png");
}

#pic-6{
    background-image: url("https://www.freepnglogos.com/uploads/coca-cola-png/coca-cola-classic-the-coca-cola-company-30.png");
}

#pic-7{
    background-image: url("https://www.freepnglogos.com/uploads/coca-cola-png/coca-cola-classic-the-coca-cola-company-30.png");
}

#pic-8{
    background-image: url("https://www.freepnglogos.com/uploads/coca-cola-png/coca-cola-classic-the-coca-cola-company-30.png");
}

#pic-9{
    background-image: url("https://www.freepnglogos.com/uploads/coca-cola-png/coca-cola-classic-the-coca-cola-company-30.png");
}

#pic-10{
    background-image: url("https://www.freepnglogos.com/uploads/coca-cola-png/coca-cola-classic-the-coca-cola-company-30.png");
}

#pic-11{
    background-image: url("https://www.freepnglogos.com/uploads/fries-png/premium-french-fries-photos-7.png");
}

#pic-12{
    background-image: url("https://www.freepnglogos.com/uploads/fries-png/premium-french-fries-photos-7.png");
}

#pic-13{
    background-image: url("https://www.freepnglogos.com/uploads/fries-png/premium-french-fries-photos-7.png");
}

#pic-14{
    background-image: url("https://www.freepnglogos.com/uploads/fries-png/premium-french-fries-photos-7.png");
}

#pic-15{
    background-image: url("https://www.freepnglogos.com/uploads/fries-png/premium-french-fries-photos-7.png");
}


        </style>
    </head>
    <body>
    <div class="header">
        PX GRILL
    </div>

<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Entre</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Drinks</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Sides</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="check" data-bs-toggle="tab" data-bs-target="#checkout" type="button" role="tab" aria-controls="checkout" aria-selected="false">Check Out</button>
  </li>
</ul>

<div class="tab-content" id="myTabContent">

<!-- > TAB ONE</>-->
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
    <div class="page-title">Entre</div>

    <div class="menue-container">
      <div class="menue-item">
        <div class="btn-contain">
          <button class="add btn btn-dark">ADD</button>
        </div>
        <div id="pic-1" class="pic"></div>
        <div class="item-name">Burger</div>
        <div class="price">$5</div>
        <div class="des">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, minima.</div>
      </div>

      <div class="menue-item">
        <div class="btn-contain">
          <button class="add btn btn-dark">ADD</button>
        </div>
        <div id="pic-2" class="pic"></div>
        <div class="item-name">Burger</div>
        <div class="price">$5</div>
        <div class="des">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, minima.</div>
      </div>

      <div class="menue-item">
        <div class="btn-contain">
          <button class="add btn btn-dark">ADD</button>
        </div>
        <div id="pic-3" class="pic"></div>
        <div class="item-name">Burger</div>
        <div class="price">$5</div>
        <div class="des">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, minima.</div>
      </div>

      <div class="menue-item">
        <div class="btn-contain">
          <button class="add btn btn-dark">ADD</button>
        </div>
        <div id="pic-4" class="pic"></div>
        <div class="item-name">Burger</div>
        <div class="price">$5</div>
        <div class="des">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, minima.</div>
      </div>

      <div class="menue-item">
        <div class="btn-contain">
          <button class="add btn btn-dark">ADD</button>
        </div>
        <div id="pic-5" class="pic"></div>
        <div class="item-name">Burger</div>
        <div class="price">$5</div>
        <div class="des">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, minima.</div>
      </div>

    </div>

  </div>

  <!-- > TAB TWO</>-->

  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

    <div class="page-title">Drinks</div>

    <div class="menue-container">
      <div class="menue-item">
        <div class="btn-contain">
          <button class="add btn btn-dark">ADD</button>
        </div>
        <div id="pic-6" class="pic"></div>
        <div class="item-name">Coke</div>
        <div class="price">$5</div>
        <div class="des">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, minima.</div>
      </div>

      <div class="menue-item">
        <div class="btn-contain">
          <button class="add btn btn-dark">ADD</button>
        </div>
        <div id="pic-7" class="pic"></div>
        <div class="item-name">Coke</div>
        <div class="price">$5</div>
        <div class="des">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, minima.</div>
      </div>

      <div class="menue-item">
        <div class="btn-contain">
          <button class="add btn btn-dark">ADD</button>
        </div>
        <div id="pic-8" class="pic"></div>
        <div class="item-name">Coke</div>
        <div class="price">$5</div>
        <div class="des">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, minima.</div>
      </div>

      <div class="menue-item">
        <div class="btn-contain">
          <button class="add btn btn-dark">ADD</button>
        </div>
        <div id="pic-9" class="pic"></div>
        <div class="item-name">Coke</div>
        <div class="price">$5</div>
        <div class="des">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, minima.</div>
      </div>

      <div class="menue-item">
        <div class="btn-contain">
          <button class="add btn btn-dark">ADD</button>
        </div>
        <div id="pic-10" class="pic"></div>
        <div class="item-name">Coke</div>
        <div class="price">$5</div>
        <div class="des">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, minima.</div>
      </div>

    </div>
  </div>

  <!-- > TAB THREE</>-->

  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

    <div class="page-title">Sides</div>

    <div class="menue-container">
      <div class="menue-item">
        <div class="btn-contain">
          <button class="add btn btn-dark">ADD</button>
        </div>
        <div id="pic-11" class="pic"></div>
        <div class="item-name">Fries</div>
        <div class="price">$5</div>
        <div class="des">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, minima.</div>
      </div>

      <div class="menue-item">
        <div class="btn-contain">
          <button class="add btn btn-dark">ADD</button>
        </div>
        <div id="pic-12" class="pic"></div>
        <div class="item-name">Fries</div>
        <div class="price">$5</div>
        <div class="des">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, minima.</div>
      </div>

      <div class="menue-item">
        <div class="btn-contain">
          <button class="add btn btn-dark">ADD</button>
        </div>
        <div id="pic-13" class="pic"></div>
        <div class="item-name">Fries</div>
        <div class="price">$5</div>
        <div class="des">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, minima.</div>
      </div>

      <div class="menue-item">
        <div class="btn-contain">
          <button class="add btn btn-dark">ADD</button>
        </div>
        <div id="pic-14" class="pic"></div>
        <div class="item-name">Fries</div>
        <div class="price">$5</div>
        <div class="des">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, minima.</div>
      </div>

      <div class="menue-item">
        <div class="btn-contain">
          <button class="add btn btn-dark">ADD</button>
        </div>
        <div id="pic-15" class="pic"></div>
        <div class="item-name">Fries</div>
        <div class="price">$5</div>
        <div class="des">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, minima.</div>
      </div>
    </div>
  </div>

  <!-- > TAB FOUR</>-->

  <div class="tab-pane fade" id="checkout" role="tabpanel" aria-labelledby="checkout">

    <div class="page-title">Checkout Cart</div>

    <div class="cart">
      <div class="cart-header">
        <div class="item-head">ITEM</div>
        <div class="quantity">QUANTITY</div>
        <div class="price">PRICE</div>
      </div>
      <div class="cart-items">
      </div>
      <div class="bottom-line">
        <div class="blank"></div>
        <div class="check-out"><button class="check-out-btn add btn btn-dark" class="btn btn-primary">Check Out</button></div>
        <!-- <div class="total-price">0</div> -->
      </div>
    </div>

  </div>
</div>


            <script>

                const allItems = [];

                if (document.readyState == 'loading'){
                document.addEventListener('DOMContentLoaded', ready)
                } else{
                    ready()
                }

                function ready(){
                    
                    var removeCartItems = document.getElementsByClassName('remove')
                    for (var i = 0; i < removeCartItems.length; i++){
                        var btn = removeCartItems[i]
                        btn.addEventListener('click', removeCartItem)
                    }

                    var quantity = document.getElementsByClassName('entered-quantity')
                    for (var i = 0; i < quantity.length; i++){
                        var input = quantity[i]
                        input.addEventListener('change', changeQuantity)
                    }

                    var addToCartButtons = document.getElementsByClassName('add')
                    for (i = 0; i < addToCartButtons.length; i++){
                        var btn = addToCartButtons[i]
                        btn.addEventListener('click', addTooCart)
                    }
                }


                function addTooCart(e){
                    var btn = e.target
                    var menueItem = btn.parentElement.parentElement
                    var itemName = menueItem.getElementsByClassName("item-name")[0].innerText
                    var price = menueItem.getElementsByClassName('price')[0].innerText
                    // console.log(price)
                    addItemToCart(itemName, price)
                }

                function changeQuantity(e){
                    var input = e.target
                    if (isNaN(input.value) || input.value <= 0){
                        input.value = 1
                    }
                    updateCart()
                }

                function removeCartItem(e){
                    allItems.pop();
                    console.log(allItems);
                    var btnClicked = e.target
                    btnClicked.parentElement.parentElement.remove()
                    // console.log(btnClicked)
                    updateCart()
                    
                }


                function updateCart(){
                    var cartItemContainer = document.getElementsByClassName('cart-items')[0]
                    var cartItems = cartItemContainer.getElementsByClassName('item')

                    // console.log(cartItems)

                    var total = 0

                    for (var i = 0; i < cartItems.length; i++){
                        var cartItem = cartItems[i]
                        var price = cartItem.getElementsByClassName('price')[0]
                        var quantity = cartItem.getElementsByClassName('entered-quantity')[0]
                        var priceNum = parseFloat(price.innerText.replace('$', ''))
                        var quantityNum = quantity.value
                        

                        total = total + (priceNum * quantityNum)
                    }

                    document.getElementsByClassName('total-price')[0].innerText = '$' + total

                }

                function addItemToCart(title, price){
                    var cartRow = document.createElement('div')
                    cartRow.classList.add('item')
                    var cart = document.getElementsByClassName('cart-items')[0]
                    // var cartItemNames = document.getElementsByClassName('item-name')
                    // for (var i = 0; i < cartItemNames.length; i++){
                    //     if (cartItemNames[i].innerText == title){
                    //         alert('This item is already in your cart')
                    //         return
                    //     }
                    // }
                    var newItem = `
                        <div class="item">
                            <div class="item-name">${title}</div>
                            <div class="quantity"><input class="entered-quantity" type="number" value="1"></div>
                            <div class="price">${price}</div>
                            <div class="price"><button class="remove">Remove</button></div>
                        </div>
                    `
                    allItems.push(title);
                    console.log(allItems);

                    cartRow.innerHTML = newItem
                    cart.append(cartRow)
                    ready()
                    updateCart()

                    
                }

            
            </script>
    </body>
    </html>

<?php
}