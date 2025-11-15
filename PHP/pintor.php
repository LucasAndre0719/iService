
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Agendamento - Serviço de Pintor</title>
        <link rel="stylesheet" href="../CSS/style_P.css"> </head>
        <body>
            
        <div class="background-container">
        </div>
        
        <div class="header-tag">
            Pintor
        </div>
        
        <div class="form-container">
            <h2 class="form-title">Agendamento</h2>
            <form>
                <div class="input-group-row">
                    <input type="text" placeholder="nome" required>
                    <input type="text" placeholder="sobrenome" required>
                </div>
                
                <input type="email" placeholder="E-mail" class="full-width-input" required>
                
                <input type="tel" placeholder="número" class="full-width-input" required>
                
                <div class="security-check">
                    <input type="checkbox" id="seguranca" required>
                    <label for="seguranca">Termos de Segurança</label>
                </div>
                
                <button type="submit" class="agenda-button">Agendar</button>
            </form>
        </div>
        
    </body>
    </html>


