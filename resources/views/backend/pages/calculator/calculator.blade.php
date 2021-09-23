
<div id="calculator">

    <div class="choice">
        <select name="item" id="item">
            <option value="">Please select an item</option>
            <option value="1">Tarpaulin</option>
            <option value="2">Sticker</option>
        </select>
    </div>
    
    <br><br>

    <div class="container">
        <label>SIZE:</label>
        <input type="text" id="w_size">
        <input type="text" id="h_size">
        <button class="compute">COMPUTE</button>
    </div>

    <br><br>

    <div class="output">
        <label>DISCOUNT:</label>
        <span class="discount">0</span>
        <br><br>
        <label>ORIGINAL PRICE:</label>
        <span class="orig_price">0</span>
        <br><br>
        <label>DISCOUNT PRICE:</label>
        <span class="disc_price">0</span>
    </div>

</div>


<script src="{{ asset('docs/js/app.js') }}"></script>

<script>
    var original_price = 0;

    $(document).ready(function() {
        

    });
    
    $(document).on('change', '#item', ()=>{
        var val = $('#item').val();

        if(val === '1') {
            original_price = 14.00;
            $('.discount').text('12.00');
        }
        else if(val === '2') {
            original_price = 1.00;
            $('.discount').text('0.8');
        }

    }).on('click', '.compute', ()=>{

        var width = $('#w_size').val();
        var height = $('#h_size').val();
        var discount = parseFloat($('.discount').text());
        var total_price = parseFloat($('.discount').text());

        var product = (width * height);
        var total_price = (product * original_price);
        var total_discount_price = (product * discount);

        $('.orig_price').text(total_price);
        $('.disc_price').text(total_discount_price);

    });

</script>
