import { gql } from '@urql/core';
import client from './client.js';

export const getAchievements = (page) => {
    return client
    .query(gql`
        query {
            achievements(page: ${page}) {
                data {
                    id
                    date
                    summary
                    metrics {
                        name
                        competency {
                        name
                        }
                    }
                    links {
                        label
                        url
                    }
                }
                paginatorInfo {
                    hasMorePages
                }
            }
        }
    `)
    .toPromise();
}
