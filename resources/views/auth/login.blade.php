@extends('layouts.app')
@section('content')
                <section class="login_content">
                    <form>
                        <h1>Login</h1>
                        <div>
                            <input type="text" class="form-control" placeholder="Username" required="" />
                        </div>
                        <div>
                            <input type="password" class="form-control" placeholder="Password" required="" />
                        </div>
                        <div>
                            <a class="btn btn-primary submit" href="home">Masuk</a>
                            <a class="reset_pass" href="#" style="color:blue"  >Lupa password?</a>
                        </div>
                        <div class="clearfix"></div>
                        <div class="separator">

                            <p class="change_link">
                                <a href="#toregister" class="to_register" > Daftar Akun  </a>
                                
                            </p>
                            <div class="clearfix"></div>
                            <br />
                            <div>
                                <!-- <h1> Gocalori!</h1> -->
                                <img src="images/Logofix.png" alt="" width="200px" height="90px">
                                <p> Gocalori! partner untuk membantu menentukan makanan sehat Anda </p>
                               
                                
                            </div>
                        </div>
                    </form>
                    <!-- form -->
                </section>
                <!-- content -->
            </div>
            <div id="register" class="animate form">
                <section class="login_content">
                    <form>
                        <h1>Daftar</h1>
                        <div>
                            <input type="text" class="form-control" placeholder="Username" required="" />
                        </div>
                        <div>
                            <input type="email" class="form-control" placeholder="Email" required="" />
                        </div>
                        <div>
                            <input type="password" class="form-control" placeholder="Password" required="" />
                        </div>
                        <div>
                            <a class="btn btn-primary submit" href="index.html">Daftar</a>
                        </div>
                        <div class="clearfix"></div>
                        <div class="separator">

                            <p class="change_link">Sudah punya akun ?
                                <a href="#tologin" class="to_register" style="color:blue"> Masuk </a>
                            </p>
                            <div class="clearfix"></div>
                            <br />
                            <div>
                                <img src="images/Logofix.png" alt="" width="200px" height="90px">
                                <p> Gocalori! partner untuk membantu menentukan makanan sehat Anda</p>
                               
                            </div>
                        </div>
                    </form>
                    <!-- form -->
                </section>
                <!-- content -->
            </div>
@endsection