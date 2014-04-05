<?php
/*
* @package Include /help/ja
*/
?>

<h1>カスタム OID/データ #1-10(Custom OID/Data #1-10)</h1>

<p>マッチする正規表現で、1 から 10 まであります。マッチすると、アラートが発報されます。設定した値は、_snmp_fx_ マクロ(_snmp_f1_, _snmp_f2_,...)で利用できます。マッチング対象として利用できるのは最初の 10変数のみですが、マクロにはいくつでも(_snmp_f11_, _snmp_f12_, ...)指定できます。</p>


<table width=100%>
<tr>
	<p>フィルタリング(および結果のマクロ)には最大 20の変数を利用できます。しかし、特定の順番に従う必要はありません。変数の位置は、フィールドの前の値で定義することができます。
つまり、もしトラップで受信した最初の値から <80><8B><80><8B>"Uno" という値を検索し、トラップで受信した 3番目の値の "Tres" 、同様に、<80><9C>Cinco<80><9D> and <80><9C>Siete<80><9D> でアラートを上げたい場合、次のように設定します。</p>
</tr>
<tr>
        <img src="../images/help/custom_oid.png" width='520' height='180'>
</tr>
<tr>
        <p>変数マクロとして、_snmp_f1_ から _snmp_f7_ をアラート定義に利用することができます。アラートアクションでは、これらのマクロを利用できます。</p>
</tr>
<tr>
        <img src="../images/help/custom_oid2.png" width='520' height='60'>
</tr>
<tr>
        <p>アラートを発報する SNMP トラップの例を以下に示します。</p>
</tr>
<tr>
        <img src="../images/help/trap.png" width='520' height='220'>
</tr>
<tr>
        <p>以下の内容でアラート(内部監査ログ)が生成されます。</p>
 
<p>SNMP Alert of 192.168.5.2 with OID .1.3.6.1.4.1.2789.2005
Varbind 100: <80><9C>cien<80><9D> Varbind 3: <80><9C>tres<80><9D> Varbind 20: <80><9C>veinte<80><9D> Varbind 60: <80><9C>sesenta<80><9D></p>

<p>ただし、トラップに 200 の値があったとしても、最大 20のフィルタ変数そして、20の値しか利用できません。それが 10、50や、170 番目といった位置にあるかどうかは関係ありません。</p>
</tr>
</table>
