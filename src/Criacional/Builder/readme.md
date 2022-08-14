Definição:
    - Tem como objetivo simplificar a construção de objetos complexos, abstraindo essa complexidade em classes específicas e permiti criar diferentes representações e tipos de um objeto usando o mesmo código de contrução.

Elementos:
    - Product -> É o objeto complexo construído pelo Builder.
    - Builder -> Interface que serve como contrato para a construção de nossos objetos.
    - ConcreteBuilder -> É a implementação da construção do objeto Product de acordo com os dados específicos.
    - (Opcional) Director -> É a uma classe concreta opcional, que abstrai as etapas da construção do Product usando a interface Builder. Pode fornecer métodos diferentes para construir o produto de formas diferentes.

Curiosidade:
    - Diferente do padrão Factory, o builder define um passo a passo para a construção do objeto pela classe Directory.
    - A interface base do builder define todas as etapas de construção possíveis, e os buildrs concretos implementam essas etapas para construir representações particulares do produto. Enquanto isso, a classe diretor guia a ordem de construção.
    - O padrão Builder pode ser aplicado quando a construção de várias representações do produto envolvem etapas similares que diferem apenas nos detalhes.

Vantagens:
    - Facilita a manutenibilidade, pois separamos a definição de suas representações.
    - Código das representações e construção bem encapsulados.
    - Você pode reutilizar o mesmo código de construção quando construindo várias representações de produtos.
    - Princípio de responsabilidade única. Você pode isolar um código de construção complexo da lógica de negócio do produto.

Desvantagens:
    - Pode diminuir a performance da aplicação, quando temos produtos muito complexos que precisam instanciar outros objetos dentro deles.