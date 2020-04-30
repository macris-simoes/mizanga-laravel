@extends('template')

@section('content')

    <div class="container">
        <ul class="nav nav-tabs my-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active " href="/inscrito">Informações</a>
            </li>
            @if(date('Y-m-d') > $end_date->event_end_date)
            <li class="nav-item">
                <a class="nav-link " href="/inscrito/certificados">Certificados </a>
            </li>
            @endif
            
            <li class="nav-item">
            <a class="nav-link" href="/inscrito/trabalho/enviar">Enviar trabalho</a>
            </li>
            <li class="nav-item">
            <a class="nav-link " href="/inscrito/trabalho/cadastrados">Trabalhos cadastrados</a>
            </li>
        </ul>
    </div>
    
    <div class="container shadow">
        <div class="mb-1 pt-1">
            <h4 class="display-3">Informações pessoais</h4>
            <p class="lead font-italic"></p>
        </div>

        
        <div class="card-text list-group-item border-0">
        <div class="my-3">
            <h5>Dados da inscrição</h5>
            <p><strong>Código da Inscrição:</strong> {{ $inscrito['id']}} <br>
                <strong>Modalidade:</strong> {{ $inscrito['register_modality']}} <br>
                <strong>Data de inscrição:</strong> {{ $inscrito['created_at']}} <br>
                <strong>Pedido XXXXXX</strong> - R$200,00</p>
        </div>
        <hr>
        <div class="my-3">
            <h5>Dados pessoais</h5>
            <div class="row">
            <p class="col-lg-7"><strong>Nome:</strong> {{ $inscrito['name']}} </p>
            <p class="col-lg-5"><strong>Data de nascimento:</strong> {{date('d/m/Y', strtotime($inscrito->birth_date))}} </p>  
            </div>
            <div class="row">
            <p class="col-lg-7"><strong>CPF:</strong> {{ $inscrito['cpf']}}</p>
            <p class="col-lg-5"><strong>RG:</strong> {{ $inscrito['rg']}}</p>  
            </div>
            <div class="row">
            <p class="col-lg-7"><strong>Nome social:</strong> {{ $inscrito['social_name']}}</p>
            <p class="col-lg-5"><strong>Instituição para crachá:</strong> {{ $inscrito['institution']}} </p>  
            </div>
        </div>

        <span>*Caso precise editar os seus dados pessoais entre em contato <a href="/contato">aqui</a>.</span>
        <hr>

        <div class="my-3">
            <h5>Dados de contato</h5>
            <div class="row">
                <p class="col-lg-4" ><strong>Telefone residencial:</strong><span class="homePhone"> {{ $inscrito['home_phone']}}</span></p>
                <p class="col-lg-4" ><strong>Telefone profissional:</strong><span class="workPhone"> {{ $inscrito['work_phone']}}</span></p>
                <p class="col-lg-4" ><strong>Telefone celular:</strong><span class="mobilePhone"> {{ $inscrito['mobile_phone']}}</span></p>
            
            </div>
            <div class="row">
                <p class="col-lg-4" id="email"><strong>E-mail:</strong> <span class="email">{{ $inscrito['email']}}</span></p>   
            </div>




            <div class="divEdit">
                <form  name="editForm">
                    @csrf
                <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="home_phone">Telefone residencial</label>
                            <input type="text" class="form-control phone_with_ddd" id="home_phone" name="home_phone" placeholder="Ex.: (00)0000-0000" value = "{{ $inscrito->home_phone }}">        
                            </div>
                        <div class="form-group col-md-4">
                            <label for="work_phone">Telefone profissional</label>
                            <input type="text" class="form-control phone_with_ddd" id="work_phone" name="work_phone" placeholder="Ex.: (00)0000-0000" value = "{{ $inscrito->work_phone }}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="mobile_phone">Telefone celular</label>
                            <input type="text" class="form-control mobile_with_ddd'" id="mobile_phone" name="mobile_phone" placeholder="Ex.: (00)00000-0000" value = "{{ $inscrito->mobile_phone }}">
                        </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="email">E-mail*</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="E-mail" value = "{{ $inscrito->email}}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="confirmEmail">Confirmar e-mail*</label>
                        <input type="text" class="form-control" id="confirmEmail" placeholder="Confirmar e-mail">
                    </div>
                </div>
                <div class="form-row">
                        <div class="mr-2">
                            <button class="mt-3 btn btn-primary edit" type="submit" style="width:120px">Enviar </button>
                        </div>
                        <div class="">
                            <button class="mt-3 btn btn-alert cancel" type="submit" style="width:120px">Cancelar </button>
                        </div>
                    </div>
                </form>
            </div>





            <div class="row">
                <div class="col-12">
                    <button class="mt-3 btn btn-primary btnEditar" style="width:120px" >Editar</button>
                    <div><p id="response"> </p></div>
                </div>
            </div>
        </div>
        <hr>

        <div class="my-3">
            <h5>Atuação profissional</h5>

            <div class="row">
                <p class="col-lg-4"><strong>Situação profissional:</strong> </p>
                <p class="col-lg-4"><strong>Filiação institucional:</strong> </p>  
                <p class="col-lg-4"><strong>Função institucional/Cargo:</strong> </p>  
            </div>
            <div class="row">
                <p class="col-lg-4"> {{ $inscrito['profession']}} </p>
                <p class="col-lg-4"> {{ $inscrito['filiation']}} </p>  
                <p class="col-lg-4"> {{ $inscrito['job_title']}} </p>  
            </div>
            <div>
                <p><strong> Áreas de atuação (informe as áreas de atuação separadas por ponto e vírgula)</strong></p>
                <p> {{ $inscrito['expertise']}} </p>
            </div>
        </div>
        <hr>

        <div class="my-3">
            <h5>Endereço</h5>
            <div class="row">
                <p class="col-lg-6"><strong>País:</strong> {{ $inscrito['country']}} </p>
                <p class="col-lg-6"><strong>UF:</strong> {{ $inscrito['uf']}} </p>
            </div>

        </div>
        <hr>

        <div class="my-3">
            <h5>Dados complementares</h5>
            <div class="row">
                <p class="col-lg-4"><strong>Gênero:</strong> {{ $inscrito['gender']}}</p>
                <p class="col-lg-4"><strong>Raça/Cor: </strong> {{ $inscrito['color']}}</p>  
                <p class="col-lg-4"><strong>Prefere usar nome social?:</strong>  @if($inscrito->use_social_name==0)
                    Sim
                @else
                    Não
                @endif</p>  
                
            </div>
        </div>
        <hr>
        
        </div>
    </div>

    <script>  

$(function() {
    
    $('.divEdit').hide();

    $('.btnEditar').on('click', function(){
            $('.divEdit').show();
            $('.btnEditar').hide();
    });
    $('.cancel').on('click', function(){
            $('.divEdit').hide();
            $('.btnEditar').show();
    });

    $('form[name ="editForm"]').submit(function(event){
            event.preventDefault();
            $('.phone_with_ddd').unmask();
            $('.mobile_with_ddd').unmask();
        
        $.ajax({
            url: "{{ route('inscrito.edit')}}",
            type: "POST",
            data: $(this).serialize(),
            dataType: 'json',
            success: function(data) {
                $('.homePhone').html(data.home_phone);
                $('.workPhone').html(data.work_phone);
                $('.mobilePhone').html(data.mobile_phone);
                $('.email').html(data.email);

                $('.divEdit').hide();
                $('.btnEditar').show()

                let html = '';
                if (data.errors) {
                    html = '<div class="alert alert-danger">';
                        for (let count = 0; count < data.errors.length; count++) {
                        html += `<p> ${data.errors[count]} </p>`;
                        } 
                        html += '</div>';
                }
            }
        });
    });

});



</script>
@endsection
