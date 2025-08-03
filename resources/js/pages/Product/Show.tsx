import { CurrencyFomatter } from "@/components/core/CurrencyFomatter";
import { Product, VariationType, VariationTypeOption } from "@/types";
import { useForm, usePage } from "@inertiajs/react";
import { useMemo, useState } from "react";
import { json } from "stream/consumers";


export default function Show(
  { product,
    variationOptions }:
    {
      product: Product,
      variationOptions: number[]
    }
) {


  const form = useForm<{
    option_ids: Record<string, number>
    quantity: number
    price: number | null
  }>({
    option_ids: {},
    quantity: 1,
    price: null
  })

  const {url}=usePage()

  const [selectedOptions, setSelectedOptions] = useState<Record<number,VariationTypeOption>>([])

  const images=useMemo(()=>{

  },[product,selectedOptions])


  return (
    <>
    <pre className="bg-emerald-600 text-gray-800 font-bold hover:bg-pink-700">
      {JSON.stringify(product, null, 2)}
    </pre>
    </>
  )
}
