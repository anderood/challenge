<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Donators</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.index') }}">Cadastrar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('donor.index') }}">Lista de Doadores</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6 offset-md-3">
            <h2>Cadastro</h2>

                
                <form method="POST" >
                    @csrf

                    
                    <fieldset>
                        <legend>Dados do Usuário</legend>
                        
                        <div class="form-group">
                            <label for="name">Nome</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="cpf">CPF</label>
                            <input type="text" class="form-control" id="cpf" name="cpf" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Telefone</label>
                            <input type="text" class="form-control" id="phone" name="phone" required>
                        </div>
                        <div class="form-group">
                            <label for="date_of_birth">Data de Nascimento</label>
                            <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" required>
                        </div>
                    </fieldset>

                    
                    <fieldset>
                        <legend>Dados de Endereço</legend>
                        
                        <div class="form-group">
                            <label for="zipcode">CEP</label>
                            <input type="text" class="form-control" id="zipcode" name="zipcode" required>
                        </div>
                        <div class="form-group">
                            <label for="street">Rua</label>
                            <input type="text" class="form-control" id="street" name="street" required>
                        </div>
                        <div class="form-group">
                            <label for="number">Número</label>
                            <input type="text" class="form-control" id="number" name="number" required>
                        </div>
                        <div class="form-group">
                            <label for="complement">Complemento</label>
                            <input type="text" class="form-control" id="complement" name="complement">
                        </div>
                        <div class="form-group">
                            <label for="district">Bairro</label>
                            <input type="text" class="form-control" id="district" name="district" required>
                        </div>
                        <div class="form-group">
                            <label for="city">Cidade</label>
                            <input type="text" class="form-control" id="city" name="city" required>
                        </div>
                        <div class="form-group">
                            <label for="state">Estado</label>
                            <input type="text" class="form-control" id="state" name="state" required>
                        </div>
                    </fieldset>

                    <div class="form-group">
                        <label for="donation_interval">Intervalo de doação</label>
                        <select class="form-control" id="donation_interval" name="donation_interval">
                            <option value="Unico">Unico</option>
                            <option value="Bimestral">Bimestral</option>
                            <option value="Semestral">Semestral</option>
                            <option value="Anual">Anual</option>
                        </select>
                    </div>


                    
                    <div class="form-group mt-4">
                        <label>Opção de Cartão</label>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-primary active">
                                <input type="radio" name="card_option" id="credit_card" value="credit" checked>
                                Cartão de Crédito
                            </label>
                            <label class="btn btn-primary">
                                <input type="radio" name="card_option" id="debit_card" value="debit">
                                Cartão de Débito
                            </label>
                        </div>
                    </div>

                    
                    <fieldset id="credit_card_fields">
                        <legend>Dados do Cartão de Crédito</legend>
                        
                        <div class="form-group">
                            <label for="card_flag">Bandeira do Cartão</label>
                            <input type="text" class="form-control" id="card_flag" name="card_flag">
                        </div>
                        <div class="form-group">
                            <label for="first_numbers_card">Primeiros números do Cartão</label>
                            <input type="text" maxlength="6" class="form-control" id="first_numbers_card" name="first_numbers_card">
                        </div>
                        <div class="form-group">
                            <label for="last_numbers_card">Últimos números do Cartão</label>
                            <input type="text" maxlength="4" class="form-control" id="last_numbers_card" name="last_numbers_card">
                        </div>
                    </fieldset>

                    
                    <fieldset id="debit_card_fields" style="display: none;">
                        <legend>Dados do Cartão de Débito</legend>
                        
                        <div class="form-group">
                            <label for="bank">Banco</label>
                            <input type="text" class="form-control" id="bank" name="bank">
                        </div>
                        <div class="form-group">
                            <label for="agency">Agência</label>
                            <input type="text" class="form-control" id="agency" name="agency">
                        </div>
                        <div class="form-group">
                            <label for="account">Conta</label>
                            <input type="text" class="form-control" id="account" name="account">
                        </div>
                        <div class="form-group">
                            <label for="digit">Dígito</label>
                            <input type="text" class="form-control" id="digit" name="digit">
                        </div>
                    </fieldset>

                    <div class="form-group">
                        <label for="donation_value">Valor da Doação</label>
                        <input type="text" class="form-control" id="donation_value" name="donation_value" placeholder="Digite o valor da doação">
                    </div>


                    <button type="submit" class="btn btn-primary mt-3">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script>
        function toggleCardOption() {
            const creditCardFields = document.getElementById('credit_card_fields');
            const debitCardFields = document.getElementById('debit_card_fields');
            const creditCardOption = document.getElementById('credit_card');
            const debitCardOption = document.getElementById('debit_card');

            if (creditCardOption.checked) {
                creditCardFields.style.display = 'block';
                debitCardFields.style.display = 'none';
            } else if (debitCardOption.checked) {
                creditCardFields.style.display = 'none';
                debitCardFields.style.display = 'block';
            }
        }

        const cardOptionButtons = document.querySelectorAll('input[name="card_option"]');
        cardOptionButtons.forEach(button => {
            button.addEventListener('change', toggleCardOption);
        });

        toggleCardOption();
    </script>
</body>

</html>
