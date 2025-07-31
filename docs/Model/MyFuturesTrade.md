# # MyFuturesTrade

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Fill ID | [optional] 
**create_time** | **double** | Fill Time | [optional] 
**contract** | **string** | Futures contract | [optional] 
**order_id** | **string** | Related order ID | [optional] 
**size** | **int** | Trading size | [optional] 
**close_size** | **int** | Number of closed positions:  close_size&#x3D;0 &amp;&amp; size＞0 Open long position close_size&#x3D;0 &amp;&amp; size＜0 Open short position close_size&gt;0 &amp;&amp; size&gt;0 &amp;&amp; size &lt;&#x3D; close_size Close short position close_size&gt;0 &amp;&amp; size&gt;0 &amp;&amp; size &gt; close_size Close short position and open long position close_size&lt;0 &amp;&amp; size&lt;0 &amp;&amp; size &gt;&#x3D; close_size Close long position close_size&lt;0 &amp;&amp; size&lt;0 &amp;&amp; size &lt; close_size Close long position and open short position | [optional] 
**price** | **string** | Fill Price | [optional] 
**role** | **string** | Trade role. taker - taker, maker - maker | [optional] 
**text** | **string** | Order custom information | [optional] 
**fee** | **string** | Trade fee | [optional] 
**point_fee** | **string** | Points used to deduct trade fee | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
