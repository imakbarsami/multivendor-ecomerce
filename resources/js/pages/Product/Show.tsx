import { CurrencyFomatter } from "@/components/core/CurrencyFomatter";
import { Product } from "@/types";
import { json } from "stream/consumers";


export default function Show(
  { product,
    variationOptions }:
    {
      product: Product,
      variationOptions: number[]
    }
) {

  return (

    console.log(product, variationOptions),
    <div>
      Test
    </div>
  )
}
