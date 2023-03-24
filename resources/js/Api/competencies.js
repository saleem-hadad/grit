import { gql } from '@urql/core';
import client from './client.js';

export const getAllCompetencies = () => {
    return client
    .query(gql`
        query {
            competencies {
                id
                name
                metrics {
                    id
                    name
                    description
                }
            }
        }
    `)
    .toPromise();
}
