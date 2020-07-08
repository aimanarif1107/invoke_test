<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

<div class="container">
    <h1>Results</h1>
        {{ csrf_field() }}
        <?php foreach($survey as $value)
        { 
            if($value['id'] == 1)
            {
            ?>
            <div style="font-size:18px">
                <P><?= $value['question'] ?><BR>
                <a> &nbsp &nbsp a. <18 (Total: <?= $value['a']>0?$value['a']:0 ?>)</a><BR>
                <a> &nbsp &nbsp b. 18 to 35 (Total: <?= $value['b']>0?$value['b']:0 ?>)</a><BR>
                <a> &nbsp &nbsp c. 35 to 60 (Total: <?= $value['c']>0?$value['c']:0 ?>)</a><BR>
                <a> &nbsp &nbsp d. Above 60 (Total: <?= $value['d']>0?$value['d']:0 ?>)</a><BR>
                </p>
            </div>
        <?php } 
            if($value['id'] == 2)
            {
            ?>
            <div style="font-size:18px">
                <P><?= $value['question'] ?><BR>
                <a> &nbsp &nbsp a. Secondary school and below (Total: <?= $value['a']>0?$value['a']:0 ?>)</a><BR>
                <a> &nbsp &nbsp b. Diploma (Total: <?= $value['b']>0?$value['b']:0 ?>)</a><BR>
                <a> &nbsp &nbsp c. Degree (Total: <?= $value['c']>0?$value['c']:0 ?>)</a><BR>
                <a> &nbsp &nbsp d. Post graduate degree (Total: <?= $value['d']>0?$value['d']:0 ?>)</a><BR>
                </p>
            </div>
        <?php } 
            if($value['id'] == 3)
            {
            ?>
            <div style="font-size:18px">
                <P><?= $value['question'] ?><BR>
                <a> &nbsp &nbsp a. Less than RM 1000 (Total: <?= $value['a']>0?$value['a']:0 ?>)</a><BR>
                <a> &nbsp &nbsp b. Between RM1000 to RM3000 (Total: <?= $value['b']>0?$value['b']:0 ?>)</a><BR>
                <a> &nbsp &nbsp c. Between RM3000 to RM5000 (Total: <?= $value['c']?>)</a><BR>
                <a> &nbsp &nbsp d. More than RM5000 (Total: <?= $value['d']>0?$value['d']:0 ?>)</a><BR>
                </p>
             </div>
       <?php }
            if($value['id'] == 4)
            {
            ?>
            <div style="font-size:18px">
                <P><?= $value['question'] ?><BR>
                <a> &nbsp &nbsp a. Male (Total: <?= $value['a']>0?$value['a']:0 ?>)</a><BR>
                <a> &nbsp &nbsp b. Female (Total: <?= $value['b']>0?$value['b']:0 ?>)</a><BR>
                </p>
             </div>
        <?php } ?>
    <?php } ?>
    <button type="button" class="btn btn-primary" onclick="window.location='{{ url("survey/question") }}'">Submit Another Survey</button>
    <button type="button" class="btn btn-success" onclick="window.location='{{ url("/") }}'" style="margin-left:10px">Home</button>
</div>
<style>
.container {
  margin-left: 20%;
  margin-top: 100px;
}
</style> 