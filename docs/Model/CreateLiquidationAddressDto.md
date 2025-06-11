# CreateLiquidationAddressDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | The blockchain chain for the liquidation address | 
**currency** | **string** | The currency for the liquidation address | 
**address** | **string** | The liquidation address on the blockchain | 
**external_account_id** | **string** | External bank account to send funds to | [optional] 
**prefunded_account_id** | **string** | Developer&#x27;s prefunded account id | [optional] 
**bridge_wallet_id** | **string** | Bridge Wallet to send funds to | [optional] 
**destination_payment_rail** | [**AllOfCreateLiquidationAddressDtoDestinationPaymentRail**](AllOfCreateLiquidationAddressDtoDestinationPaymentRail.md) | Payment rail for sending funds | [optional] 
**destination_currency** | [**AllOfCreateLiquidationAddressDtoDestinationCurrency**](AllOfCreateLiquidationAddressDtoDestinationCurrency.md) | Currency for sending funds | [optional] 
**destination_wire_message** | **string** | Message for wire transfers | [optional] 
**destination_sepa_reference** | **string** | Reference for SEPA transactions | [optional] 
**destination_ach_reference** | **string** | Reference for ACH transactions | [optional] 
**destination_address** | **string** | Crypto wallet address for crypto transfers | [optional] 
**destination_blockchain_memo** | **string** | Memo for blockchain transactions | [optional] 
**return_address** | **string** | Address to return funds on failed transactions (Not supported on Stellar) | [optional] 
**custom_developer_fee_percent** | **string** | Custom developer fee percentage (Base 100 percentage: 10.2% &#x3D; \&quot;10.2\&quot;) | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

