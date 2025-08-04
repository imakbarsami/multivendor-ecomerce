import { CurrencyFomatter } from "@/components/core/CurrencyFomatter";
import { Product, VariationType, VariationTypeOption } from "@/types";
import { useForm, usePage } from "@inertiajs/react";
import { useEffect, useMemo, useState } from "react";
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

    for(let typeId in selectedOptions){
      const option=selectedOptions[typeId];
      if(option.images.length>0){
        return option.images
      }
    }

    return product.images

  },[product,selectedOptions])


  const computedProduct=useMemo(()=>{

    const selectedOptionsIds=Object.values(selectedOptions).map(op=>op.id).sort()

    for(let variation of product.variations){
      
      const optionIds=variation.variation_type_option_ids.sort()

      if(arraysAreEqual(selectedOptionsIds,optionIds)){
        
        return {
          price:variation.price,
          quantity:variation.quantity===null?Number.MAX_VALUE:variation.quantity
        }
      }
    }

    return {
      price:product.price,
      quantity:product.quantity
    }
    
  },[product,selectedOptions])


  useEffect(()=>{

    for(let type of product.variationTypes){

      const selectedOptionsIds:number=variationOptions[type.id]
      console.log(selectedOptionsIds,type.options)

      chooseOption(
        type.id,
        type.options.find(op=>op.id==selectedOptionsIds)|| type.options[0],
        false
      )
    }

  },[])


  return (
    <>
    <pre className="bg-emerald-600 text-gray-800 font-bold hover:bg-pink-700">
      {JSON.stringify(product, null, 2)}
    </pre>
    </>
  )
}
