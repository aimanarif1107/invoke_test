<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

<div class="container">
    <h1>Please answer this survey</h1>

    <form method="post" action="/survey" enctype="multipart/form-data">
        {{ csrf_field() }}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif            

            <?php foreach($survey as $value)
            { 
                if($value['id'] == 1)
                {
                ?>
                <div style="font-size:18px">
                    <P><?= $value['question'] ?><BR>
                    <input type="radio" name="age" value="a"><18<BR>
                    <input type="radio" name="age" value="b">18 to 35<BR>
                    <input type="radio" name="age" value="c">35 to 60<BR>
                    <input type="radio" name="age" value="d">Above 60<BR>
                    </p>
                </div>
            <?php } 
                if($value['id'] == 2)
                {
                ?>
                <div style="font-size:18px">
                    <P><?= $value['question'] ?><BR>
                    <input type="radio" name="education" value="a">Secondary school and below<BR>
                    <input type="radio" name="education" value="b">Diploma<BR>
                    <input type="radio" name="education" value="c">Degree<BR>
                    <input type="radio" name="education" value="d">Post graduate degree<BR>
                    </p>
                </div>
            <?php } 
                if($value['id'] == 3)
                {
                ?>
                <div style="font-size:18px">
                    <P><?= $value['question'] ?><BR>
                    <input type="radio" name="income" value="a">Less than RM 1000<BR>
                    <input type="radio" name="income" value="b">Between RM1000 to RM3000<BR>
                    <input type="radio" name="income" value="c">Between RM3000 to RM5000<BR>
                    <input type="radio" name="income" value="d">More than RM5000<BR>
                    </p>
                </div>
        <?php }
                if($value['id'] == 4)
                {
                ?>
                <div style="font-size:18px">
                    <P><?= $value['question'] ?><BR>
                    <input type="radio" name="gender" value="a">Male<BR>
                    <input type="radio" name="gender" value="b">Female<BR>
                    </p>
                </div>
            <?php } ?>
        <?php } ?>
        <div class="form-group row">
            <button type="submit" class="btn btn-primary" style="margin-left:1%">Submit</button>
        </div>
    </form>
</div>
<style>
.container {
  margin-left: 15%;
  margin-top: 5%;
}
</style> 