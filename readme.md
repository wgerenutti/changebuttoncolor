
# ChangeColorButton

O módulo ChangeColorButton é uma extensão do Magento 2 que permite alterar a cor dos botões para uma visualização de loja específica através de um comando do console.

## Instalação

Você pode instalar este módulo usando o Composer. Certifique-se de que o Composer está instalado em seu sistema e execute o seguinte comando na raiz do seu projeto Magento:

`composer config repositories.wgerenutti/change-color-button vcs git@github.com:wgerenutti/change-color-button.git` 
`composer require wgerenutti/change-color-button:^1`

Após a instalação bem-sucedida, execute os comandos de atualização do Magento para habilitar o módulo:

`php bin/magento module:enable Wgerenutti_ChangeColorButton`
`php bin/magento setup:upgrade` 
`php bin/magento cache:clean`

**Observação:**
Para que essa mudança seja refletida na loja, o tema do seu site deve estar configurado para usar essa configuração ao definir a cor dos botões.
Se o tema do seu site está usando uma cor fixa para os botões ou se está usando uma variável LESS/SASS diferente para a cor dos botões, então a mudança na configuração do sistema não terá efeito.

## Objetivos do Módulo

O objetivo principal do ChangeColorButton é permitir que os usuários alterem a cor dos botões para uma visualização de loja específica através de um comando do console. Isso oferece aos administradores da loja uma maneira rápida e fácil de personalizar a aparência de suas lojas.

----------

# ChangeColorButton

The ChangeColorButton module is a Magento 2 extension that allows you to change the color of buttons for a specific store view via a console command.

## Installation

You can install this module using Composer. Make sure Composer is installed on your system and run the following command in the root of your Magento project:

`composer config repositories.wgerenutti/change-color-button vcs git@github.com:wgerenutti/change-color-button.git`  
`composer require wgerenutti/change-color-button:^1`

After successful installation, run Magento update commands to enable the module:

`php bin/magento module:enable Wgerenutti_ChangeColorButton`  
`php bin/magento setup:upgrade` 
`php bin/magento cache:clean`

**Observation:**
  
To have this change reflected on your store, your website's theme must be configured to use this setting when defining the color of buttons. 
If your website's theme is using a fixed color for buttons or if it's using a different LESS/SASS variable for button color, then the change in system configuration will not take effect.

## Module Objectives

The main objective of ChangeColorButton is to allow users to change the color of buttons for a specific store view via a console command. This provides store administrators with a quick and easy way to customize the look of their stores.