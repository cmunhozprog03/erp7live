<div>
    <section>
        <style>
            nav svg{
                max-height: 15px;
            }
        </style>
        <!-- Modal Delete -->
        <div class="modal fade" id="modalFormDelete" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="modalFormDelete" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Deseja Excluir?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <h3>Deseja realmente excluir?</b>?</h3>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button wire:click="delete" type="button" class="btn btn-primary">Sim</button>
                </div>
            </div>
            </div>
        </div>
        <div class="row justify-content-lg-around">
            <div class="col-md-3">
                <h2>Empresas</h2>
            </div>
            <div class="col-md-2 mt-3">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#companyModal">
                    <i class="fas fa-plus-circle"></i>&nbsp; Adicionar
                </button>
            </div>
            <div class="col-md-7 mt-3">
                <form action="" class="form-inline w3-right mr-2">
                    <input type="text" class="form-control" wire:model="search" placeholder="Buscar">

                </form>
            </div>
            <hr>

            <div class="container">
                <div class="w3-card-4">
                    @if ($companies->count())
                    <div class="">
                        <table class="table table-striped table-hover table-bordered">
                            <thead class="w3-dark-gray">
                                <tr>
                                    <th width="55%">Empresa</th>
                                    <th width="25%" class="w3-center">Logotipo</th>
                                    <th width="20%" class="w3-center">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($companies as $company)
                                    <tr class="w3-large">
                                        <td>{{ $company->name }}</td>
                                        <td class="w3-center">{{ $company->logo }}</td>
                                        <td class="w3-center">
                                            <button wire:click="selectedItem({{ $company->id }}, 'update')" class="btn w3-indigo"><i class="fas fa-pen"></i></button>
                                            <button wire:click="selectedItem({{ $company->id }}, 'delete')" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $companies->links() }}
                    </div>

                    @else
                    <div class="w3-panel w3-blue-grey">
                         <h4>Nenhum Registro Encontrado.</h4>
                    </div>
                    @endif

                </div>


            </div>
        </div>
    </section>


</div>

  <!-- Modal -->
  <div class="modal fade" id="companyModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered w3-animate-zoom">
      <div class="modal-content">
        <div class="modal-header w3-dark-gray">
          <h5 class="modal-title" id="exampleModalLabel">Nova Empresa</h5>
          <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          @livewire('companies.company-form')
        </div>
        <div class="modal-footer">

        </div>
      </div>
    </div>
  </div>





