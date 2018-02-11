<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/11 0011
 * Time: 12:13
 */

namespace App\Http\Controllers;


use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function getList()
    {
        $country = Country::all();

        return view("country.list",["countrys"=>$country]);
    }

    public function addCountry(Request $request)
    {
        if($request->isMethod("GET"))
        {
            return view("country.add");
        }

        $country = new Country();
        $arrInput = $request->input('Country');
        $country->country_nu = $arrInput['country_nu'];
        $country->country_name = $arrInput['country_name'];
        $country->save();
        return redirect("/country/index");
    }

    public function delCountry($id)
    {
        $country = Country::find($id);
        $result = $country->delete();
        if($result)
        {
            return redirect("/country/index");
        }
        return redirect("/country/index");
    }

    public function editCountry($id)
    {
        $country = Country::find($id);
        return view("country.edit",["country"=>$country]);

    }

    public function modifyCountry(Request $request)
    {
        $countrys = $request->input("country");
        $objcountry = new Country();
        $objcountry->where("_id",$countrys['id'])->update($countrys);
        return redirect("/country/index");
    }


    /**
     * 移动端接口
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getListCountry()
    {
        $countryModel = new Country();
        $countrys = $countryModel->all();
        $arrCountrys = [];
        foreach ($countrys as $country){
            $item = [
                "uId"=>$country->country_nu,
                "name"=>$country->country_name,
            ];
            array_push($arrCountrys,$item);
        }
        return response()->json([
            "error_code"=>0,
            "result_code"=>200,
            "message"=>"Success",
            "result"=>["data"=>$arrCountrys]
        ]);
    }
}