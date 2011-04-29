<?php
namespace Acme\AKB48Bundle\Serializer\Encoder;

use Symfony\Component\Serializer\Encoder\AbstractEncoder;
use Symfony\Component\Serializer\Encoder\DecoderInterface;

/**
 * CsvEncoder
 *
 * @author hidenorigoto <hidenorigoto@gmail.com>
 */
class CsvEncoder extends AbstractEncoder implements DecoderInterface
{
    /**
     * {@inheritdoc}
     */
    public function encode($data, $format)
    {
        if ($this->serializer->isStructuredType($data)) {
            $data = $this->serializer->normalize($data, $format);
        }

        return '"'.implode('","', $data).'"';
    }

    /**
     * {@inheritdoc}
     */
    public function decode($data, $format)
    {
        return str_getcsv($data, ',', '"');
    }
}
