@extends('layouts.ap')

@section('content')
<div class="container">
        <h1>Payment Form</h1>

        <form action="payment" method="POST" class="pd-5">
            <div class="form-group">
                <label for="product">Order Number:</label>
                <input type="text" name="product" class="form-group"/>
            </div>
            
            <div class="form-group">
                <label for="vendor">Vendor</label>
                <input type="text" name="vendor" class="form-group"/>
            </div>

            <span>Mode of payment:</span><br>
                <label for="chkYes">
                    <input type="radio" id="chkYes" name="chkPassPort" onclick="ShowHideDiv()" />
                    Mobile Money
                </label><br>
                <label for="chkNo">
                    <input type="radio" id="chkNo" name="chkPassPort" onclick="ShowHideDiv()" />
                    Credit/Debit Card
                </label><br>
                
                <div id="dvPassport" style="display: none">
                    Enter Phone Number:
                    <input type="text" id="txtPassportNumber" placeholder="+256 xxxxxxxxx"/>
                </div><br>

                <div class="form-group">
                <label for="location">Delivery Location:</label>
                <input type="text" name="location" class="form-group"/>
                </div>

                
                <hr>

            <button type="submit" class="btn-success">Make Payment</button>
            <button type="reset" class="btn-danger">Clear</button>

        </form>

        <h1>Payment History</h1>

   
</div>
@endsection 

<script>
    function ShowNumber() {
        var mm = document.getElementById("mm");
        var pnumber = document.getElementById("pnumber");
        pnumber.style.display = mm.checked ? "block" : "none";
        }

    function ShowHideDiv() {
            var chkYes = document.getElementById("chkYes");
            var dvPassport = document.getElementById("dvPassport");
            dvPassport.style.display = chkYes.checked ? "block" : "none";
        }
</script>