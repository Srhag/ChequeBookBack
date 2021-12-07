<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cheque Back Print</title>
    <style>
      body
      {

      }
      
      *
      {
        margin: 0px;
        font: 12pt "Calibri";
        /* line-height: 190%; */
      }
      
      .page
      {
        width: 19cm;
        height: 8.4cm;
        padding-left: 0.5cm; 
        padding-right: 1.1cm; 
        border: 1px #D3D3D3 solid;

      }
      
      .font-bold
      {
        font-weight: bold;
      }

      .grid-container
      {
        display: grid;
        grid-template-columns: 7cm auto;
      }

      .grid-item
      {
        padding: 6px 0px;
        /* background-color: burlywood;
        border: 0.5px solid cadetblue; */
      }

      #amountinwords
      {
        padding-left: 0.5em;
        text-indent:-0.5em;
      }

      #height-2
      {
        height: 2cm;
      }

      @media print
      {
        .page
        {
          width: 19cm;
          height: 8.4cm;
          border: initial;
          box-shadow: initial;       
        }
        #print-button, #text-amount
        {
          visibility: hidden;
        }
      }
      .right
      {
          text-align: right;
      }

    </style>

</head>
<body>
    <div class="book">
      <div class="page">
          <div class="grid-container">
            <div class="grid-item">BENEFICIARY ACCOUNT NO.</div>
            <div class="grid-item font-bold">: <?php $_GET['acno'] ?></div>
            <div class="grid-item">BENEFICIARY NAME</div>  
            <div class="grid-item">: <?php $_GET['bname'] ?></div>
            <div class="grid-item">BENEFICIARY BANK NAME</div>
            <div class="grid-item">: <?php $_GET['bankname'] ?></div>  
            <div class="grid-item">BENEFICIARY IFSC CODE</div>
            <div class="grid-item font-bold">: <?php $_GET['ifsc'] ?></div>
            <div class="grid-item">DEBIT AMOUNT</div>
            <div class="grid-item font-bold"><p id = "amount"><?php $_GET['amount'] ?></p></div>
            <div class="grid-item" id="height-2">AMOUNT IN WORD</div>
            <div class="grid-item" id="height-2"><p id="amountinwords"></p></div>
          </div>
          <div class="grid-item right">AUTHORISED SIGNATORIES</div>
      </div>
    </div>
    <button id="print-button" onclick="window.print();">Print</button>


</body>
</html>

