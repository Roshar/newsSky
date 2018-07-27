<?php

namespace App;

/*
 * Класс для записи rss ленты из БД , в таблицу news
 */

class RssRecord
{
    /*
     * @return bool
     */
    const RSS_NAME = 'rss.xml';
    const RSS_TITLE = 'Новостная лента';
    const RSS_LINK = __DIR__.'/../App/Controllers/site/Article';
    public static function InOutRecords()
    {
        $dom = new \DOMDocument('1.0','utf-8');
        $dom->formatOutput = true;
        $dom->preserveWhiteSpace = false;
        $rss = $dom->createElement('rss');
        $version = $dom->createAttribute('version');
        $version->value='2.0';
        $rss->appendChild($version);
        $dom->appendChild($rss);

        $channel = $dom->createElement('channel');

        $title = $dom->createElement('title',self::RSS_TITLE);
        $link = $dom->createElement('link',self::RSS_LINK);
        $channel->appendChild($title);
        $channel->appendChild($link);
        $rss->appendChild($channel);


        $articles = \App\Models\Article::findAll();
        foreach ($articles as $news){
            $item = $dom->createElement('item');
            $title = $dom->createElement('title',$news->title);
            $content = $dom->createElement('content');
            $cdata = $dom->createCDATASection($news->content);
            $pubDate = $dom->createElement('pubDate',$news->newsdate);
            $content->appendChild($cdata);
            $item->appendChild($title);
            $item->appendChild($content);
            $item->appendChild($pubDate);
            $channel->appendChild($item);
        }
        $dom->save(self::RSS_NAME);
    }
}