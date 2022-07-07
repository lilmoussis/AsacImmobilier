@extends('base')

@section('content')
    @include('includes.admins.appbar')
    @include('includes.admins.sidebar')
    <h1>Ajouter un promesse</h1>
    @if($message = Session::get('succes'))
        <div>{{$message}}</div>
    @endif
    <br>
   <div class="basic-form">
    <form action="{{route('admins.promesses.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label>Sélectionner un avocat</label>
            <select class="form-control w-50" name="" >
                @foreach ($avocats as $avocat)
                
                <option value="{{$avocat->id}}">{{$avocat->nom . " " . $avocat->prenom}}</option>
                @endforeach
            </select>
        </div><br>
        <div class="form-group">
            <label>Sélectionner un Client</label>
            <select class="form-control w-50" name="" >
                @foreach ($clients as $client)
                
                <option value="{{$client->id}}">{{$client->nom . " " . $client->prenom1 . " " . $client->prenom2}}</option>
                @endforeach
            </select>
        </div>
        <br>
        <div class="form-group">
            <label>Sélectionner un Appartement</label>
            <select class="form-control w-50" name="" >
                @foreach ($appartements as $appartement)
                
                <option value="{{$appartement->id}}">{{$appartement->numappart}}</option>
                @endforeach
            </select>
        </div>
       
        
        <br>
        <input style="width: 50%; border-color: rgb(224, 152, 17) "  class="form-control" type="number" name="prixht" placeholder="prixht" id="prixht" required><br>
        <input style="width: 50%; border-color: rgb(224, 152, 17) "  class="form-control" type="number" id="taux" name="taux" placeholder="taux" required><br>
        <input style="width: 50%; border-color: rgb(224, 152, 17) "  class="form-control" type="number" id="tva" name="tva" placeholder="tva" required><br>
        <input style="width: 50%; border-color: rgb(224, 152, 17) "  class="form-control" type="number" id="prixttc" name="prixttc" placeholder="ttc" required><br>
        <input style="width: 50%; border-color: rgb(224, 152, 17) "  class="form-control" type="number" name="avance" id="avance" placeholder="avance" required><br>
        <input style="width: 50%; border-color: rgb(224, 152, 17) "  class="form-control" type="text" name="etat" placeholder="etat" required><br>
        <button   type="submit" style="width:100px; margin-left:200px"  class="btn btn-primary btn-block">Enregistrer</button>
        
    </form>
   </div>
</div>
    </div>
    
@endsection
@section('js')
<script>
    $(document).ready(function(){
        $('#tva').on('click',function () {
            $(this).val(($('#prixht').val()*$('#taux').val())/100)
        })
    })

    
    $(document).ready(function(){
        $('#prixttc').on('click',function () {
        
            var a=($('#prixht').val())
            var b=($('#tva').val()) 
            a*=1
            b*=1
            c=a+b
            $(this).val(c)
        })
    })

    $(document).ready(function(){
        $('#avance').on('click',function () {
        
            var a=($('#prixttc').val()) 
            a*=1
            b=(a*20)/100
            $(this).val(b)
        })
    })

</script>
@endsection