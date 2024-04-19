# CMS for Managing Coding-Related YouTube Channels

This is a CMS system for managing coding-related YouTube channels.
**User authentication** is required for all endpoints except `channels.index` and `channels.show`.

## Related Endpoints

-   **`POST`** `/channels`
    -   `channels.store` › `ChannelController@store`
-   **`GET`** `/channels`
    -   `channels.index` › `ChannelController@index`
-   **`GET`** `/channels/create`
    -   `channels.create` › `ChannelController@create`
-   **`GET`** `/channels/trash/{id}`
    -   `channels.trash` › `ChannelController@trash`
-   **`PUT`** `/channels/{channel}`
    -   `channels.update` › `ChannelController@update`
-   **`DELETE`** `/channels/{channel}`
    -   `channels.destroy` › `ChannelController@destroy`
-   **`GET`** `/channels/{channel}`
    -   `channels.show` › `ChannelController@show`
-   **`PUT` | `PATCH`** `/channels/{channel}`
    -   `channels.update` › `ChannelController@update`
-   **`GET`** `/channels/{channel}/edit`
    -   `channels.edit` › `ChannelController@edit`
