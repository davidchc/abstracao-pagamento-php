Para rodar,  você colocar:

**php -S localhost:8080 -t public_html**

#Qualquer coisa você pode rodar um composer update, só para atualizar os arquivos do composer

## Sobre as classes

#App\Core\Payment
-- Classe abstrata para definir metodo de pagamento

#App\Core\PaymentResponse
--Classe responsavel pelo retorno dos dados de pagamento 

## Os métodos de pagamento estão separado por dominios (pastas), que irão conter sempre config.php, 
para configurações como token e chaves e PaymentMethod para realizar o processamento do pagamento 

#App\Integrations\Payments\Cielo\PaymentMethod 
#App\Integrations\Payments\PagSeguro\PaymentMethod 
#App\Integrations\Payments\MercadoPago\PaymentMethod 


#App\Services\ManagerPayment
-- Responsavel por receber qual metodo de pagamento que foi selecionado, instancia a classe e retorna PaymentResponse 

#App\Models\Order
-- Simularia um modelo do pedido (order)

#App\Controllers\PaymentController 
-- Aqui uma classe que simularia um controller, que recebe o método de pagamento, o id do pedido, 
ele chama o ManagerPayment, informa o metodo escolhido, passa o pedido ao executar o pagamento, que retorna
PaymentStatus 

#public_html/index.php 
--Aqui só instancia o Controller

    