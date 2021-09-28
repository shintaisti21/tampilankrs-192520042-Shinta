<!DOCTYPE html>
<html>
<head>
    <title>Form Member Account</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
    body{
        background-image: url(green.jpg);
        width: 500px;
        height: 300px;
        margin: 10 auto;
        opacity: 0.9;
        border: #00868b;
        margin-top: -20px;
        box-sizing: 50px;
        }
    .konten{
        background:#556b2f;
        border: #00868b;
        width: 360px;
        margin: 30px auto 0;
        border-radius: 16px;
        overflow: hidden;
        }
    .kepala{
        background: #1a1a1a;
        padding: 7px 7px;
        height: 40px;
        }
    .lock{
        display: inline-block;
        width: 20px;
        height: 10px;
        margin-top: 10px;
        float: center;
        margin-right: 40px;
        border: #00868b;
        }
    .judul{
        color: #ffffff;
        font-weight: 20px;
        line-height: 10px;
        display: inline-block;
        }
    .artikel{
        padding:10px 15px;
        color: #ffffff;
        border-radius: 7px;
        }
    .grup{
        margin: 7px 0;
        }
    .grup label,
    .grup input,
    .grup button{
        display: block;
        }
    .grup label{
        display: inline-block;
        font-size: 15px;
        text-align: center;
        margin: 0 0.2em;
        margin-bottom: 7px;
        }
    .grup input[type="text"],
    .grup input[type="tel"],
    .grup input[type="email"],
    .grup input[type="password"]{
        width: 300px;
        height: 30px;
        padding: 0 10px;
        background: #cccccc;
        border: #000000;
        font-size: 13px;
        color: #1a1a1a;
        }
    .grup input[type="textarea"]{
        width: 187px;
        height: 50px;
        background: #cccccc;
        border: #000000;
        font-size: 13px;
        color: #1a1a1a;
        float: right;
        margin-right: 60px;
        margin-bottom: 10px;
        text-align: center ;
        }
    .grup button[type="radio"]{
        margin: 80px;
        margin-right: 7px;
        float: left;
        }
    .grup button[type="submit"]{
        background: #00868b;
        border: 2px solid #00e5ee;
        float: left;
        border-radius: 7px;
        color: #ffffff;
        cursor: pointer;
        }
    .required{
        color: red;
        font-weight: normal;
        }
</style>
<body>
    <div class="konten">
    <div class="kepala">
    <div class="lock"></div>
    <h2 class="judul">Data Pribadi</h2>
    </div>
    <div class="artikel">
        <form action="tampilan.php" method="POST">
            <fieldset><legend>Data Pribadi</legend>
                <div class="grup">
                    <label for="nim">NIM<span class="required">*</span></label>
                    <input type="text" name="nim">
                </div>
                <div class="grup">
                <label>Nama</label>
                <input type="text" name="nama">
                </div>
                <div class="grup">
                <br>
            <label>Kode Matakuliah</label>
            <input type="text" name="kode_matakuliah">
                </div>
                <div class="grup">
                    <label for="nama">Nama Matakuliah<span class="required">*</span></label>
                    <input type="nama_matakuliah" name="kode_matakuliah">
                </div>
                <div class="kelas">
                    <select name = "kelas">
                    <option value="">Kelas</option>
                    <option value="A">A</option>
                    <option value="B">B</option> </select>
                </div>
                <div class="semester">
                    <select name = "semester">
                    <option value="">Semester</option>
                    <option value="1">1</option>
                    <option value="3">3</option> 
                    <option value="5">5</option>
                    <option value="7">7</option>
                </select>
                </div>
                <div class="grup-offset">
                    <button type="submit" value="Sign In">Submit</button>
                </div>
            </fieldset>
            </form>
            </div>
            </div>
</body>
</html>