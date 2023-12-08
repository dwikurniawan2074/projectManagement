@extends('template.index')

@section('headerScript')
<!-- Google Maps JavaScript library -->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyA7AWQFoZU_E8sNCNYKc5QXexxHOEH6eQs"></script>
@endsection

@section('content')

<div class="content-page">
    <div class="content">


        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-12-6">
                    <div class="card">
                        <div class="card-body">
                            {{-- your content is here --}}
                            <form action="" method="POST">
                                @csrf
                                <div class="row">

                                    <label for=""></label>
                                    <input type="text" class="form-control" id="search_input" name="search_input" placeholder="search_input">
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="negara" class="form-label">Negara</label>
                                            @foreach($countries as $country)
                                                <option value="{{ $country['name'] }}">{{ $country['name'] }}</option>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="provinsi" class="form-label">Provinsi</label>
                                            <select class="form-select" name="provinsi">
                                                <option value="">--Pilih Provinsi--</option>
                                                <option value="1">DKI Jakarta</option>
                                                <option value="2">Banten</option>
                                                <option value="3">Yogyakarta</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="kota" class="form-label">Kabupaten/Kota</label>
                                            <select class="form-select" name="kota">
                                                <option value="">--Pilih Kota/Kabupaten--</option>
                                                <option value="1">Kota Tangerang</option>
                                                <option value="2">Tangerang Selatan</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="">
                                            <label for="alamat" class="form-label">Alamat</label>
                                            <textarea rows="5" class="form-control" id="alamat" placeholder="Alamat"
                                                name="alamat"></textarea>
                                        </div>
                                    </div>
                                </div>
                                {{-- <button type="submit">knt</button> --}}
                                <div class="text-end mt-3">
                                    <a href="{{ route('sistemPenawaran.penawaran.index') }}"
                                        class="btn btn-secondary waves-effect">Cancel</a>
                                    <button class="btn btn-red waves-effect waves-light px-4" type="submit"
                                        id="submitButton">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection

@section('pageScript')
<script>
    var searchInput = 'search_input';
 
    $(document).ready(function () {
        var autocomplete;
        autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
        types: ['geocode'],
        /*componentRestrictions: {
            country: "USA"
        }*/
        });
        
        google.maps.event.addListener(autocomplete, 'place_changed', function () {
        var near_place = autocomplete.getPlace();
        });
    });
</script>

@endsection