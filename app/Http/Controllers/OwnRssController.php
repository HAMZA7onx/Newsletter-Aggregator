<?php

namespace App\Http\Controllers;

use App\Models\AdminSide\RssItem;
use Illuminate\Http\Request;

class OwnRssController extends Controller
{
    public function index()
    {
        $rssItems = RssItem::all();

        // Check if there is data
        if ($rssItems->isEmpty()) {
            return response()->json([
                'data' => null,
                'message' => 'No Rss items found.',
            ]);
        }

        // Convert to array
        $dataArray = $rssItems->toArray();

        // Convert to XML
        $xml = $this->arrayToXml($dataArray);

        // Set content type to XML
        return response($xml, 200)->header('Content-Type', 'application/xml');
    }

    /**
     * Convert array to XML using SimpleXMLElement.
     *
     * @param array $array
     * @param SimpleXMLElement $xml
     * @return string
     */
    private function arrayToXml($array, $xml = false)
    {
        if ($xml === false) {
            $xml = new \SimpleXMLElement('<result/>');
        }

        foreach ($array as $key => $value) {
            if (is_array($value)) {
                $this->arrayToXml($value, $xml->addChild($key));
            } else {
                $xml->addChild($key, htmlspecialchars($value));
            }
        }

       
        return $xml->asXML();
    }
}
