
type Props={
    amount:number,
    currency?:string,
    locale?:string
}

export function CurrencyFomatter({amount,currency='USD',locale}:Props) {
    
    return new Intl.NumberFormat(locale,{
        style:'currency',
        currency
    }).format(amount)
}