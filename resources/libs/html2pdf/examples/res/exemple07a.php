<style type="text/css">
<!--
table { vertical-align: top; }
tr    { vertical-align: top; }
td    { vertical-align: top; }
}
-->
</style>
<page backcolor="#FEFEFE" backimg="./res/bas_page.png" backimgx="center" backimgy="bottom" backimgw="100%" backtop="0" backbottom="30mm" footer="date;heure;page" style="font-size: 12pt">
    <bookmark title="Lettre" level="0" ></bookmark>
    <table cellspacing="0" style="width: 100%;  font-size: 14px;  border: solid 1px black;">
        <tr>
            <td style="width: 50%;">
                <img  src="../../resources/img/logoPage.jpg" alt="Logo"><br>
            </td>
            <td style="width: 50%; color: #444444;" valign="middle">                
                ORDEN DE COMPRA | <?php echo "NO. 00000013"?>
            </td>
        </tr>
    </table>      
    <br>
    <table cellspacing="0" style="width: 100%;  font-size: 14px;">
        <tr>
            <td style="width: 50%;">
                Proveedor: Acer
            </td>
            <td style="width: 50%; color: #444444;" valign="middle">                
                <table cellspacing="0" style="width: 100%;  font-size: 14px;  border: solid 1px black;">
                    <tr>
                        <td style="width: 50%;">
                            
                        </td>
                        <td style="width: 50%; color: #444444;" valign="middle">                
                            
                        </td>
                    </tr>
                </table>                   
            </td>
        </tr>
    </table>   
    <br>
    <table cellspacing="0" style="width: 100%;  font-size: 14px;">
        <tr>
            <td style="width: 50%;">
                <table cellspacing="0" style="width: 100%;  font-size: 14px; ">                    
                    <tr>
                        <td>
                            Instrucciones:
                        </td>
                    </tr>
                    <tr>
                        <td>
                            
                        </td>
                    </tr>
                    <tr>
                        <td style="border: solid 1px black; width:85%; height:100px; padding:5px;">                           
                            
                        </td>
                    </tr>
                </table>
            </td>
            <td style="width: 50%; color: #000;" valign="top">                
                <table cellspacing="0" style="width: 100%;  font-size: 14px; ">
                    <tr>
                        <td style="width: 40%;">
                            Fecha Pedido
                        </td>
                        <td style="width: 10%;">
                            :
                        </td>
                        <td style="width: 50%; color: #333333;" valign="middle">                
                            25/06/2014
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3"> </td>
                    </tr>
                    <tr>
                        <td>
                            Fecha Arribo
                        </td>
                        <td>
                            :
                        </td>
                        <td style="color: #333333;" valign="middle">                
                            02/07/2014
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3"> </td>
                    </tr>                    
                    <tr>
                        <td>
                            Forma de Pago
                        </td>
                        <td>
                            :
                        </td>
                        <td style="color: #333333;" valign="middle">                
                            Contado
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3"> </td>
                    </tr>                    
                    <tr>
                        <td>
                            Embarques Parciales
                        </td>
                        <td>
                            :
                        </td>
                        <td style="color: #333333;" valign="middle">                
                            No
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3"> </td>
                    </tr>                    
                    <tr>
                        <td>
                            Moneda
                        </td>
                        <td>
                            :
                        </td>
                        <td style="color: #333333;" valign="middle">                
                            Dólares
                        </td>
                    </tr>
                </table>                   
            </td>
        </tr>
    </table>   
    <br>
    <br>
    <b>Detalle de la Orden:</b>
    <br>
    <br>
    <table cellspacing="0" style="width: 100%; border: solid 1px black; background: #E7E7E7; text-align: center; font-size: 10pt;">
        <tr>
            <th style="width: 12%">#Item</th>
            <th style="width: 52%">Descripción</th>
            <th style="width: 10%">Cantidad</th>
            <th style="width: 13%">Costo Unitario</th>
            <th style="width: 13%">Costo Total</th>
        </tr>
    </table>
<?php
    $nb = rand(5, 11);
    $produits = array();
    $total = 0;
    for ($k=0; $k<$nb; $k++) {
        $num = rand(100000, 999999);
        $nom = "le produit n°".rand(1, 100);
        $qua = rand(1, 20);
        $prix = rand(100, 9999)/100.;
        $total+= $prix*$qua;
        $produits[] = array($num, $nom, $qua, $prix, rand(0, $qua));
?>
    <table cellspacing="0" style="width: 100%; border: solid 1px black; background: #F7F7F7; text-align: center; font-size: 10pt;">
        <tr>
            <td style="width: 12%; text-align: left"><?php echo $num; ?></td>
            <td style="width: 52%; text-align: left"><?php echo $nom; ?></td>
            <td style="width: 10%;"><?php echo $qua; ?></td>
            <td style="width: 13%; text-align: right"><?php echo number_format($prix, 2, ',', ' '); ?> &euro;</td>
            <td style="width: 13%; text-align: right;"><?php echo number_format($prix*$qua, 2, ',', ' '); ?> &euro;</td>
        </tr>
    </table>
<?php
    }
?>
    <table cellspacing="0" style="width: 100%; border: solid 1px black; background: #E7E7E7; text-align: center; font-size: 10pt;">
        <tr>
            <th style="width: 87%; text-align: right;">Total : </th>
            <th style="width: 13%; text-align: right;"><?php echo number_format($total, 2, ',', ' '); ?> &euro;</th>
        </tr>
    </table>
    <br>
    Cette reprise concerne la quantité et les matériels dont la référence figure sur le <a href="#document_reprise">document de reprise joint</a>.<br>
    Nous vous demandons de nous retourner ces produits en parfait état et dans leur emballage d'origine.<br>
    <br>
    Nous vous demandons également de coller impérativement l'autorisation de reprise jointe, sur le colis à reprendre afin de faciliter le traitement à l'entrepôt.<br>
    <br>
    Notre Service Clients ne manquera pas de revenir vers vous dès que l'avoir de ces matériels sera établi.<br>
    <nobreak>
        <br>
        Dans cette attente, nous vous prions de recevoir, Madame, Monsieur, Cher Client, nos meilleures salutations.<br>
        <br>
        <table cellspacing="0" style="width: 100%; text-align: left;">
            <tr>
                <td style="width:50%;"></td>
                <td style="width:50%; ">
                    Mle Jesuis CELIBATAIRE<br>
                    Service Relation Client<br>
                    Tel : 33 (0) 1 00 00 00 00<br>
                    Email : on_va@chez.moi<br>
                </td>
            </tr>
        </table>
    </nobreak>
</page>