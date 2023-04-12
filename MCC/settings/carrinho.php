

<?php


    echo"

            <table>
                <thead>
                    <tr>
                        <th class=\"itens\">Itens</th>
                        <th class=\"preco\">Preço</th>
                        <th class=\"quantidade\">Quantidade</th>
                        <th class=\"subtotal\">Subtotal</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td class=\"itens\">
                            <div class=\"item-card\">
                                <img src=\"$value[path]\" alt=\"\" >
                            </div>
                            <div class=\"itens-desc\">
                                <h5><a href=\"#\">$value[titulo]</a></h5>
                                <span>Em estoque</span>
                            </div>
                        </td>
                        <td class=\"preco\">
                            BRL $value[preco]
                        </td>
                        <td class=\"quantidade\">
                            <input type=\"text\" value=\"$value[quantidade]\">
    <form method='post'>
                            <label for='$value[id]Diminuir'> 
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-dash-circle-fill\" viewBox=\"0 0 16 16\">
                                    <path d=\"M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7z\"/>
                                </svg>
                            </label>

                            <input type=\"submit\" value=\"$value[id]\" name=\"diminuirQuantidade\" id=\"$value[id]Diminuir\" style=\"display:none\">
                            <label for='$value[id]Aumentar'> 
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-plus-circle-fill\" viewBox=\"0 0 16 16\">
                                    <path d=\"M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z\"/>
                                </svg>
                            </label>

                            <input type=\"submit\" value=\"$value[id]\" name=\"aumentarQuantidade\" id=\"$value[id]Aumentar\" style=\"display:none\">
                            </form>
                        </td>
                        <td class=\"subtotal\">
                            BRL ". $value['preco'] * $value['quantidade']. "
                        </td>
                        <td class=\"actions\">
                            <i class=\"bi bi-x\">
                                
                                  <form method='post' >
                                    <label for=\"$value[id]\" class=\"btn-fechar\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-x\" viewBox=\"0 0 16 16\" >
                                            <path d=\"M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z\"/>
                                        </svg>
                                    </label>
                                    <input type='submit' name='excluir' id=\"$value[id]\" value=\"$value[id]\" style=\"display:none\"> 
                                </form><br>

                            </i>

                            <a href=\"\">
                                Editar
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
    ";
    $preco1 = $value['preco'];
    $quantidade = $value['quantidade'];
    $subtotal = $preco1 * $quantidade;
    if(!isset($precoTotal)){
    $precoTotal = 0;

    }
    $precoTotal += $subtotal;

?>