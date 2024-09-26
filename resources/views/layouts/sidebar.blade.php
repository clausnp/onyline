<div class="col-md-2">
    <div class="card mb-3" style="margin-left: 10px;">
        <div class="card-header">
            Geral
        </div>
        <ul class="list-group list-group-flush">
            <a href="{{ route('products.index') }}"><li class="list-group-item">Produtos</li></a>
            <a href="{{ route('users.index') }}"><li class="list-group-item">Usuários</li></a>
            <a href="{{ route('sliders.index') }}"><li class="list-group-item">Sliders</li></a>
        </ul>
    </div>
    <div class="card mb-3" style="margin-left: 10px;">
        <div class="card-header">
            Segurança
        </div>
        <ul class="list-group list-group-flush">
            <a href="{{ route('roles.index') }}"><li class="list-group-item">Cargos</li></a>
            <a href="{{ route('permissions.index') }}"><li class="list-group-item">Permissões</li></a>
        </ul>
    </div>
    <div class="card" style="margin-left: 10px;">
        <div class="card-header">
            Restrito
        </div>
        <ul class="list-group list-group-flush">
            <a href="{{ route('backupDatabase') }}"><li class="list-group-item">Backup DB</li></a>
        </ul>
    </div>
</div>
