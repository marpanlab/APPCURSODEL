@include('padrao')
@section('conteudo')
 
 <!-- ========== title-wrapper end ========== -->

 
     

     <div class="col">
         <div class="card-style settings-card-2 mb-30">
             <div class="title mb-30">
                 <h6>Cursos</h6>
             </div>
             <form method="post" action="{{route('cadastro-curso')}}">
                @csrf
                 <div class="row">

                 <div class="input-style-1">
                             <label>Id Categoria</label>
                             <input type="text" name="idcategoria" placeholder="Id categoria..." />
                         </div>

                     <div class="col-12">
                        <div class="input-style-1">
                             <label>Nome</label>
                             <input type="text" name="nomecurso" placeholder="Nome do curso..." />
                         </div>
                     </div>
                     <div class="col-12">
                         <div class="input-style-1">
                             <label>Carga Horária</label>
                             <input type="text" name="cargahoraria" placeholder="Carga Horária..." />
                         </div>
                     </div>
                     <div class="col-12">
                         <div class="input-style-1">
                             <label>Valor</label>
                             <input type="text" name="valor" placeholder="Valor a ser pago..." />
                         </div>
                     </div>
                     
                     <div class="col-12">
                         <button class="main-btn primary-btn btn-hover">
                             Adicionar Curso
                         </button>
                     </div>
                 </div>
             </form>
         </div>
         <!-- end card -->
     </div>
     <!-- end col -->
 </div>
 <!-- end row -->
 </div>
 <!-- end container -->
 </section>
 <!-- ========== section end ========== -->