@extends('layouts.backend.app')

@section('title')
    Edit Pengajar
@endsection

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
            <div class="alert-body">
                <strong>{{ $message }}</strong>
                <button type="button" class="close" data-dismiss="alert">×</button>
            </div>
        </div>
    @elseif($message = Session::get('error'))
        <div class="alert alert-danger" role="alert">
            <div class="alert-body">
                <strong>{{ $message }}</strong>
                <button type="button" class="close" data-dismiss="alert">×</button>
            </div>
        </div>
    @endif
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2> Pengajar</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header header-bottom">
                            <h4>Edit Pengajar</h4>
                        </div>
                        <div class="card-body">
                            <form action=" {{ route('backend-pengguna-pengajar.update', $pengajar->id) }} " method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="basicInput">Nama</label> <span class="text-danger">*</span>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                name="name" value=" {{ $pengajar->name }} " placeholder="Nama" />
                                            @error('name')
                                                <div class="invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="basicInput">Email</label> <span class="text-danger">*</span>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                                name="email" value=" {{ $pengajar->email }} " placeholder="Email" />
                                            @error('email')
                                                <div class="invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="basicInput">Mengajar</label> <span class="text-danger">*</span>
                                            <select name="mengajar"
                                                class="form-control @error('mengajar') is-invalid @enderror">
                                                <option value="">-- Pilih --</option>
                                                <option value="Kepala Sekolah"
                                                    @if ($pengajar->userDetail->mengajar == 'Kepala Sekolah') selected @endif>Kepala Sekolah
                                                </option>
                                                <option value="Wakil Kepala"
                                                    @if ($pengajar->userDetail->mengajar == 'Wakil Kepala') selected @endif>Wakil Kepala</option>
                                                <option value="Guru Matematika"
                                                    @if ($pengajar->userDetail->mengajar == 'Matematika') selected @endif>Guru Matematika
                                                </option>
                                                <option value="Guru Bahasa Indonesia" @if ($pengajar->userDetail->mengajar == 'Guru Bahasa Indo') selected @endif>
                                                    Guru Bahasa Indo</option>
                                                <option value="Guru IPS" @if ($pengajar->userDetail->mengajar == 'Guru ips') selected @endif>
                                                    Guru Ips</option>
                                                <option value="Guru PJOK" @if ($pengajar->userDetail->mengajar == 'Guru pjok') selected @endif>
                                                    Guru Pjok</option>
                                                <option value="Guru Seni Budaya"
                                                    @if ($pengajar->userDetail->mengajar == 'Guru Seni budaya') selected @endif>Guru Seni Budaya
                                                </option>
                                                <option value="Guru Bahasa Jawa"
                                                    @if ($pengajar->userDetail->mengajar == 'Guru Bahasa Jawa') selected @endif>Guru Bahasa Jawa
                                                </option>
                                                <option value="Guru Bahasa Inggris" @if ($pengajar->userDetail->mengajar == 'Guru Bahasa Inggris') selected @endif>
                                                    Guru Bahasa Inggris</option>
                                                <option value="Guru TIK" @if ($pengajar->userDetail->mengajar == 'Guru TIK') selected @endif>
                                                    Guru TIK</option>
                                                <option value="Guru BK" @if ($pengajar->userDetail->mengajar == 'Guru BK') selected @endif>
                                                    Guru BK</option>
                                                <option value="Guru Agama" @if ($pengajar->userDetail->mengajar == 'Guru Agama') selected @endif>
                                                    Guru Agama</option>
                                                <option value="Guru Ipa" @if ($pengajar->userDetail->mengajar == 'Guru Ipa') selected @endif>
                                                    Guru Ipa</option>
                                                <option value="Guru PPKN" @if ($pengajar->userDetail->mengajar == 'Guru PPKN') selected @endif>
                                                    Guru PPKN</option>


                                                
                                            </select>
                                            @error('mengajar')
                                                <div class="invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="basicInput">NIP</label> <span class="text-danger">*</span>
                                            <input type="text" class="form-control @error('nip') is-invalid @enderror"
                                                name="nip" value=" {{ $pengajar->userDetail->nip }} "
                                                placeholder="NIP" />
                                            @error('nip')
                                                <div class="invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="basicInput">Foto Profile</label> <span class="text-danger">*</span>
                                            <input type="file"
                                                class="form-control @error('foto_profile') is-invalid @enderror"
                                                name="foto_profile" />
                                            <small class="text-danger">Kosongkan jika tidak ingin mengubah.</small>
                                            @error('foto_profile')
                                                <div class="invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="basicInput">Status</label> <span class="text-danger">*</span>
                                            <select name="status"
                                                class="form-control @error('status') is-invalid @enderror">
                                                <option value="Aktif"
                                                    {{ $pengajar->status == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                                                <option value="Tidak Aktif"
                                                    {{ $pengajar->status == 'Tidak Aktif' ? 'selected' : '' }}>Tidak Aktif
                                                </option>
                                            </select>
                                            @error('status')
                                                <div class="invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-3">
                                        <div class="form-group">
                                            <label for="basicInput">Website</label>
                                            <input type="text"
                                                class="form-control @error('website') is-invalid @enderror"
                                                name="website" value=" {{ $pengajar->userDetail->website }} "
                                                placeholder="Website" />
                                            @error('website')
                                                <div class="invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-3">
                                        <div class="form-group">
                                            <label for="basicInput">Linkedln</label>
                                            <input type="text"
                                                class="form-control @error('linkedln') is-invalid @enderror"
                                                name="linkedln" value=" {{ $pengajar->userDetail->linkidln }} "
                                                placeholder="Linkedln" />
                                            @error('linkedln')
                                                <div class="invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-3">
                                        <div class="form-group">
                                            <label for="basicInput">Instagram</label>
                                            <input type="text"
                                                class="form-control @error('instagram') is-invalid @enderror"
                                                name="instagram" value=" {{ $pengajar->userDetail->instagram }} "
                                                placeholder="Instagram" />
                                            @error('instagram')
                                                <div class="invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-3">
                                        <div class="form-group">
                                            <label for="basicInput">Facebook</label>
                                            <input type="text"
                                                class="form-control @error('facebook') is-invalid @enderror"
                                                name="facebook" value=" {{ $pengajar->userDetail->facebook }} "
                                                placeholder="Facebook" />
                                            @error('facebook')
                                                <div class="invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-3">
                                        <div class="form-group">
                                            <label for="basicInput">Youtube</label>
                                            <input type="text"
                                                class="form-control @error('youtube') is-invalid @enderror"
                                                name="youtube" value=" {{ $pengajar->userDetail->youtube }} "
                                                placeholder="Youtube" />
                                            @error('youtube')
                                                <div class="invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-3">
                                        <div class="form-group">
                                            <label for="basicInput">Twitter</label>
                                            <input type="text"
                                                class="form-control @error('twitter') is-invalid @enderror"
                                                name="twitter" value=" {{ $pengajar->userDetail->twitter }} "
                                                placeholder="Twitter" />
                                            @error('twitter')
                                                <div class="invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                                <button class="btn btn-primary" type="submit">Update</button>
                                <a href="{{ route('backend-pengguna-pengajar.index') }}"
                                    class="btn btn-warning">Batal</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
