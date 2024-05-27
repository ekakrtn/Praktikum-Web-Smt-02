@include('admin.header')
@include('admin.sidebar')

<div class="container-fluid px-4">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Data Pegawai</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Data  pegawai</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Title</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="wrapper">
                        <div class="user-card">
                            <div class="user-card-img">
                                <img src="https://i.pinimg.com/564x/d4/12/ac/d412ac54131e89f9dec3fe8acd86f075.jpg" alt="">
                            </div>
                            <div class="user-card-info">
                                <h2>Eka kartini</h2>
                                <p><span>Email:</span> yooadmin@gmail.com</p>
                                <p><span>Lokasi:</span>Bogor, Indonesia</p>
                                <p><span>Jabatan:</span> Staf</p>
                                <p><span>Tentang staf:</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    Footer
                </div>
            </div>
        </section>
    </div>
</div>

@include('admin.footer')

<style>
body {
    background: #daa000;   
    font-family: 'Montserrat', sans-serif;
}
/* .wrapper {
    display: flex;
    justify-content: center;
    align-items: center;
    padding-top: 12%;
} */
.user-card {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background-color: #fff;
    border-radius: 10px;
    padding: 40px;
    width: 650px;
    position: relative;
    overflow: hidden;
    box-shadow: 0 2px 20px -5px rgba(0,0,0,0.5);
}
.user-card:before {
    content: '';
    position: absolute;
    height: 300%;
    width: 173px;
    background: #262626;
    top: -60px;
    left: -125px;
    z-index: 0;
    transform: rotate(17deg);
}
.user-card-img {
    display: flex;
    justify-content: center;
    align-items: center;   
    z-index: 3;
}
.user-card-img img {
    width: 200px;
    height: 200px;
    object-fit: cover;
    border-radius: 50%;
}
.user-card-info {
    text-align: center;
}
.user-card-info h2 {
    font-size: 24px;
    margin: 0;
    margin-bottom: 10px;
    font-family: 'Bebas Neue', sans-serif;
    letter-spacing: 3px;
}
.user-card-info p {
    font-size: 14px;
    margin-bottom: 2px;
}
.user-card-info p span {
    font-weight: 700;
    margin-right: 10px;
}
@media only screen and (min-width: 768px) {
    .user-card {
        flex-direction: row;
        align-items: flex-start;
    }   
    .user-card-img {
        margin-right: 20px;
        margin-bottom: 0;
    }
    .user-card-info {
        text-align: left;
    }
}
@media (max-width: 767px) {
    .wrapper {
        padding-top: 3%;
    }
    .user-card:before {
        width: 300%;
        height: 200px;
        transform: rotate(0);
    }
    .user-card-info h2 {
        margin-top: 25px;
        font-size: 35px;
    }
    .user-card-info p span {
        display: block;
        margin-bottom: 15px;
        font-size: 18px;
    }
}
</style>
