var addItemId = 0;

function addToCart(item) {
    addItemId += 1;
    var selectedItem = document.createElement('div');
    selectedItem.classList.add('cartImg');
    selectedItem.setAttribute('id', addItemId);
    img = document.createElement('img');
    img.setAttribute('src', item.children[0].currentSrc);
    var harga = document.createElement('div');
    harga.innerText = item.children[1].children[0].innerText;
    harga.setAttribute('class', 'cartText');
    var delBtn = document.createElement('button');
    delBtn.innerText = 'Delete';
    delBtn.setAttribute('class', 'delBtn')
    delBtn.setAttribute('onclick', 'del(' + addItemId + ')');
    var cartItems = document.getElementById('title');
    selectedItem.append(harga);
    selectedItem.append(delBtn);
    cartItems.append(selectedItem);
}

function del(item) {
    document.getElementById(item).remove();
}