<?php declare(strict_types=1);
/**
 * This file is automatic generated by build_docs.php file
 * and is used only for autocomplete in multiple IDE
 * don't modify manually.
 */

namespace danog\MadelineProto\Namespace;

interface Folders
{
    /**
     * Edit peers in [peer folder](https://core.telegram.org/api/folders#peer-folders).
     *
     * @param list<array{_: 'inputFolderPeer', peer: array|int|string, folder_id?: int}> $folder_peers Array of New peer list @see https://docs.madelineproto.xyz/API_docs/types/InputFolderPeer.html
     * @return array @see https://docs.madelineproto.xyz/API_docs/types/Updates.html
     */
    public function editPeerFolders(array $folder_peers = []): array;
}
