    
<p>This is the visitor page!</p>

<p>Lorem ipsum dolor sit amet, ad per recteque patrioque. Qui ea ullum impetus dissentias, admodum argumentum ut duo, malis interesset mel ea. Quo aliquip maluisset cu, erant repudiare contentiones ea nam. At mel tantas graecis molestie, ne solum recteque delicatissimi est. An fugit perpetua mea, in harum nonumes usu.</p>

<p>Sit nostrud euismod te, solet pertinacia voluptatibus eu cum.</p>

<div class="row">
    <?php if($_SESSION["theme"] == "woodland"):?>
    <div class="col-md-4"><div class="img-container"><img class="img-thumbnail" src="https://static.pexels.com/photos/26750/pexels-photo-26750.jpg"/></div></div>
    <div class="col-md-4"><div class="img-container"><img class="img-thumbnail" src="https://static.pexels.com/photos/26750/pexels-photo-26750.jpg"/></div></div>
    <div class="col-md-4"><div class="img-container"><img class="img-thumbnail" src="https://static.pexels.com/photos/26750/pexels-photo-26750.jpg"/></div></div>
    <?php elseif($_SESSION["theme"] == "ocean"):?>
    <div class="col-md-4"><div class="img-container"><img class="img-thumbnail" src="https://static.pexels.com/photos/262325/pexels-photo-262325.jpeg"/></div></div>
    <div class="col-md-4"><div class="img-container"><img class="img-thumbnail" src="https://static.pexels.com/photos/262325/pexels-photo-262325.jpeg"/></div></div>
    <div class="col-md-4"><div class="img-container"><img class="img-thumbnail" src="https://static.pexels.com/photos/262325/pexels-photo-262325.jpeg"/></div></div>
    <?php else:?>
    <div class="col-md-4"><div class="img-container"><img class="img-thumbnail" src="https://static.pexels.com/photos/147485/pexels-photo-147485.jpeg"/></div></div>
    <div class="col-md-4"><div class="img-container"><img class="img-thumbnail" src="https://static.pexels.com/photos/147485/pexels-photo-147485.jpeg"/></div></div>
    <div class="col-md-4"><div class="img-container"><img class="img-thumbnail" src="https://static.pexels.com/photos/147485/pexels-photo-147485.jpeg"/></div></div>
    <?php endif?>
</div>    

<div class="row">
    <?php if($_SESSION["theme"] == "woodland"):?>
    <div class="col-md-4"><div class="img-container"><img class="img-thumbnail" src="https://static.pexels.com/photos/26750/pexels-photo-26750.jpg"/></div></div>
    <div class="col-md-4"><div class="img-container"><img class="img-thumbnail" src="https://static.pexels.com/photos/26750/pexels-photo-26750.jpg"/></div></div>
    <div class="col-md-4"><div class="img-container"><img class="img-thumbnail" src="https://static.pexels.com/photos/26750/pexels-photo-26750.jpg"/></div></div>
    <?php elseif($_SESSION["theme"] == "ocean"):?>
    <div class="col-md-4"><div class="img-container"><img class="img-thumbnail" src="https://static.pexels.com/photos/262325/pexels-photo-262325.jpeg"/></div></div>
    <div class="col-md-4"><div class="img-container"><img class="img-thumbnail" src="https://static.pexels.com/photos/262325/pexels-photo-262325.jpeg"/></div></div>
    <div class="col-md-4"><div class="img-container"><img class="img-thumbnail" src="https://static.pexels.com/photos/262325/pexels-photo-262325.jpeg"/></div></div>
    <?php else:?>
    <div class="col-md-4"><div class="img-container"><img class="img-thumbnail" src="https://static.pexels.com/photos/147485/pexels-photo-147485.jpeg"/></div></div>
    <div class="col-md-4"><div class="img-container"><img class="img-thumbnail" src="https://static.pexels.com/photos/147485/pexels-photo-147485.jpeg"/></div></div>
    <div class="col-md-4"><div class="img-container"><img class="img-thumbnail" src="https://static.pexels.com/photos/147485/pexels-photo-147485.jpeg"/></div></div>
    <?php endif?>
</div>
